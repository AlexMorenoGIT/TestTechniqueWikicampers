<?php

namespace App\Controller;

use App\Repository\VehicleRepository;
use App\Repository\AvailabilityRepository;
use App\Form\VehicleType;
use App\Form\VehicleSearchType;
use App\Entity\VehicleSearch;
use App\Form\AvailabilityType;
use App\Entity\Vehicle;
use App\Entity\Availability;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use App\Entity\User;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class VehicleController extends AbstractController
{
    private $repository;
    private $entityManager;

    public function __construct(VehicleRepository $repository, EntityManagerInterface $entityManager) {
        $this->repository = $repository;
        $this->entityManager = $entityManager;
    }

    #[Route('/', name: 'app_home')]
    public function index(PaginatorInterface $paginator, Request $request, AvailabilityRepository $availabilityRepository, UserPasswordHasherInterface $hasher): Response
    {
        $search = new VehicleSearch();
        $formVehicle = $this->createForm(VehicleSearchType::class, $search);
        $formVehicle->handleRequest($request);

        $vehicles = $this->repository->findAll();
        foreach($vehicles as $vehicle) {
            if($vehicle->getAvailabilities()->isEmpty()) {
                $this->entityManager->remove($vehicle);
                $this->entityManager->flush();
            }
        }
        
        $vehicles = $paginator->paginate(
            $this->repository->findAllVisibleQuery($search),
            $request->query->getInt('page', 1),
            12
        );

        $availabilities = $paginator->paginate(
            $availabilityRepository->findAll(),
            $request->query->getInt('page', 1),
            12
        );
        
        return $this->render('home/index.html.twig', [
            'vehicles' => $vehicles, 
            'availabilities' => $availabilities,
            'form' => $formVehicle->createView()
        ]);
    }

    #[Route('/create-vehicle', name: 'create-vehicle')]
    public function createVehicle(Request $request) {
        //ne pas mettre l'accès si l'utilisateur n'est pas connecté
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        $vehicle = new Vehicle();
        $formVehicle = $this->createForm(VehicleType::class, $vehicle);
        $formVehicle->handleRequest($request);

        if($formVehicle->isSubmitted() && $formVehicle->isValid()) {
            $this->entityManager->persist($vehicle);
            $this->entityManager->flush();

            return $this->redirectToRoute('create-availability', ['id' => $vehicle->getId()]);
        }

        return $this->render('home/vehicle.html.twig', [
            'formVehicle' => $formVehicle->createView()
        ]);
    }

    #[Route('/delete/{id}', name: 'delete-vehicle')]
    public function deleteVehicle($id) {
        $vehicle = $this->entityManager->getRepository(Vehicle::class)->find($id);

        if($vehicle) {
            $this->entityManager->remove($vehicle);
            $this->entityManager->flush();
            $this->addFlash('success', 'Vehicule supprimé avec succès !');
        }

        return $this->redirectToRoute('app_home');
    }

    #[Route('/edit/{id}', name: 'edit-vehicle')]
    public function editVehicle(Request $request, $id) {
        $vehicle = $this->entityManager->getRepository(Vehicle::class)->find($id);
        $formVehicle = $this->createForm(VehicleType::class, $vehicle);
        $formVehicle->handleRequest($request);

        if($formVehicle->isSubmitted() && $formVehicle->isValid()) {
            $this->entityManager->flush();
            $this->addFlash('success', 'Vehicule modifié avec succès !');

            return $this->redirectToRoute('edit-availability', ['id' => $vehicle->getId()]);
        }

        return $this->render('home/vehicle.html.twig', [
            'formVehicle' => $formVehicle->createView()
        ]);
    }
}

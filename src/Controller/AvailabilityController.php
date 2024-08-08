<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Form\AvailabilityType;
use App\Entity\Availability;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Vehicle;

class AvailabilityController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager) {
        $this->entityManager = $entityManager;
    }

    #[Route('/create-availability/{id}', name: 'create-availability')]
    public function createAvailability(Request $request, $id) {
        $vehicle = $this->entityManager->getRepository(Vehicle::class)->find($id);

        $availability = new Availability();
        $availability->setVehicle($vehicle);
        $availability->setCreatedBy( $this->getUser()->getUsername());
        $formAvailability = $this->createForm(AvailabilityType::class, $availability);
        $formAvailability->handleRequest($request);

        if($formAvailability->isSubmitted() && $formAvailability->isValid()) {
            $vehicle->setPending(false);
            $this->entityManager->persist($availability);
            $this->entityManager->flush();
            $this->addFlash('success', 'Véhicule ajouté avec succès !');

            return $this->redirectToRoute('app_home');
        }

        return $this->render('availability/availability.html.twig', [
            'formAvailability' => $formAvailability->createView()
        ]);
    }

    #[Route('/edit-availability/{id}', name: 'edit-availability')]
    public function editAvailability(Request $request, $id) {
        $availability = $this->entityManager->getRepository(Availability::class)->findOneBy(['vehicle' => $id]);
        $formAvailability = $this->createForm(AvailabilityType::class, $availability);
        $formAvailability->handleRequest($request);

        if($formAvailability->isSubmitted() && $formAvailability->isValid()) {
            $this->entityManager->flush();
            $this->addFlash('success', 'Véhicule modifié avec succès !');

            return $this->redirectToRoute('app_home');
        }

        return $this->render('availability/availability.html.twig', [
            'formAvailability' => $formAvailability->createView()
        ]);
    }

}

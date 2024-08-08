<?php

namespace App\Repository;

use App\Entity\Vehicle;
use App\Entity\VehicleSearch;
use Doctrine\ORM\QueryBuilder;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Vehicle>
 *
 * @method Vehicle|null find($id, $lockMode = null, $lockVersion = null)
 * @method Vehicle|null findOneBy(array $criteria, array $orderBy = null)
 * @method Vehicle[]    findAll()
 * @method Vehicle[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VehicleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Vehicle::class);
    }

    /**
     * @param VehicleSearch $search
     * @return QueryBuilder
     */
    public function findAllVisibleQuery(VehicleSearch $search): QueryBuilder
    {
        $query = $this->findVisibleQuery();

        if ($search->getMaxPricePerDay()) {
            $query = $query
                ->leftJoin('v.availabilities', 'a1')
                ->andWhere('a1.pricePerDay <= :maxPricePerDay')
                ->setParameter('maxPricePerDay', $search->getMaxPricePerDay());
        }

        if ($search->getBeginDate() && $search->getEndDate()) {
            $query = $query
                ->leftJoin('v.availabilities', 'a2')
                ->andWhere('a2.startDate <= :beginDate')
                ->andWhere('a2.endDate >= :endDate')
                ->setParameter('beginDate', $search->getBeginDate())
                ->setParameter('endDate', $search->getEndDate());

            $result = $query->getQuery()->getResult();

            //Bonus 2 : +/- 1 day
            if (empty($result)) {
                $query = $query
                    ->leftJoin('v.availabilities', 'a3')
                    ->andWhere('a3.startDate <= :beginDate')
                    ->andWhere('a3.endDate >= :endDate')
                    ->setParameter('beginDate', $search->getBeginDate()->modify('-1 day'))
                    ->setParameter('endDate', $search->getEndDate()->modify('+1 day'));
            }
        }

        return $query;
    }

    public function findVisibleQuery(): QueryBuilder
    {
        return $this->createQueryBuilder('v');
    }

//    /**
//     * @return Vehicle[] Returns an array of Vehicle objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('v')
//            ->andWhere('v.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('v.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Vehicle
//    {
//        return $this->createQueryBuilder('v')
//            ->andWhere('v.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}

<?php

namespace App\Repository;

use App\Entity\FRCustomerReviews;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method FRCustomerReviews|null find($id, $lockMode = null, $lockVersion = null)
 * @method FRCustomerReviews|null findOneBy(array $criteria, array $orderBy = null)
 * @method FRCustomerReviews[]    findAll()
 * @method FRCustomerReviews[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FRCustomerReviewsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FRCustomerReviews::class);
    }

    // /**
    //  * @return FRCustomerReviews[] Returns an array of FRCustomerReviews objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?FRCustomerReviews
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

<?php

namespace App\Repository;

use App\Entity\FRReviews;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method FRReviews|null find($id, $lockMode = null, $lockVersion = null)
 * @method FRReviews|null findOneBy(array $criteria, array $orderBy = null)
 * @method FRReviews[]    findAll()
 * @method FRReviews[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FRReviewsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FRReviews::class);
    }

    // /**
    //  * @return FRReviews[] Returns an array of FRReviews objects
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
    public function findOneBySomeField($value): ?FRReviews
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

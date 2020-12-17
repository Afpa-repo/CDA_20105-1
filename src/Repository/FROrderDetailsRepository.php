<?php

namespace App\Repository;

use App\Entity\FROrderDetails;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method FROrderDetails|null find($id, $lockMode = null, $lockVersion = null)
 * @method FROrderDetails|null findOneBy(array $criteria, array $orderBy = null)
 * @method FROrderDetails[]    findAll()
 * @method FROrderDetails[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FROrderDetailsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FROrderDetails::class);
    }

    // /**
    //  * @return FROrderDetails[] Returns an array of FROrderDetails objects
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
    public function findOneBySomeField($value): ?FROrderDetails
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

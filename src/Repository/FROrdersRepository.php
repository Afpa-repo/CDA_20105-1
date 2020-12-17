<?php

namespace App\Repository;

use App\Entity\FROrders;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method FROrders|null find($id, $lockMode = null, $lockVersion = null)
 * @method FROrders|null findOneBy(array $criteria, array $orderBy = null)
 * @method FROrders[]    findAll()
 * @method FROrders[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FROrdersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FROrders::class);
    }

    // /**
    //  * @return FROrders[] Returns an array of FROrders objects
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
    public function findOneBySomeField($value): ?FROrders
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

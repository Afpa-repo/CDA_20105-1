<?php

namespace App\Repository;

use App\Entity\FRProducts;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method FRProducts|null find($id, $lockMode = null, $lockVersion = null)
 * @method FRProducts|null findOneBy(array $criteria, array $orderBy = null)
 * @method FRProducts[]    findAll()
 * @method FRProducts[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FRProductsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FRProducts::class);
    }

    // /**
    //  * @return FRProducts[] Returns an array of FRProducts objects
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
    public function findOneBySomeField($value): ?FRProducts
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

<?php

namespace App\Repository;

use App\Entity\FRSubCategory;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method FRSubCategory|null find($id, $lockMode = null, $lockVersion = null)
 * @method FRSubCategory|null findOneBy(array $criteria, array $orderBy = null)
 * @method FRSubCategory[]    findAll()
 * @method FRSubCategory[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FRSubCategoryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FRSubCategory::class);
    }

    // /**
    //  * @return FRSubCategory[] Returns an array of FRSubCategory objects
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
    public function findOneBySomeField($value): ?FRSubCategory
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

<?php

namespace App\Repository;

use App\Entity\FRPersonnes;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method FRPersonnes|null find($id, $lockMode = null, $lockVersion = null)
 * @method FRPersonnes|null findOneBy(array $criteria, array $orderBy = null)
 * @method FRPersonnes[]    findAll()
 * @method FRPersonnes[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FRPersonnesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FRPersonnes::class);
    }

    // /**
    //  * @return FRPersonnes[] Returns an array of FRPersonnes objects
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
    public function findOneBySomeField($value): ?FRPersonnes
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

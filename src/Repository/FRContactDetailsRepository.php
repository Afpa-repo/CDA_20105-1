<?php

namespace App\Repository;

use App\Entity\FRContactDetails;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method FRContactDetails|null find($id, $lockMode = null, $lockVersion = null)
 * @method FRContactDetails|null findOneBy(array $criteria, array $orderBy = null)
 * @method FRContactDetails[]    findAll()
 * @method FRContactDetails[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FRContactDetailsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, FRContactDetails::class);
    }

    // /**
    //  * @return FRContactDetails[] Returns an array of FRContactDetails objects
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
    public function findOneBySomeField($value): ?FRContactDetails
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

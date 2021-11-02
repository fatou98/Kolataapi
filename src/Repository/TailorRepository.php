<?php

namespace App\Repository;

use App\Entity\Tailor;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Tailor|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tailor|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tailor[]    findAll()
 * @method Tailor[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TailorRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tailor::class);
    }

    // /**
    //  * @return Tailor[] Returns an array of Tailor objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Tailor
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

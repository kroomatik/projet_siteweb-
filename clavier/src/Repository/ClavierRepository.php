<?php

namespace App\Repository;

use App\Entity\Clavier;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Clavier|null find($id, $lockMode = null, $lockVersion = null)
 * @method Clavier|null findOneBy(array $criteria, array $orderBy = null)
 * @method Clavier[]    findAll()
 * @method Clavier[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClavierRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Clavier::class);
    }

    // /**
    //  * @return Clavier[] Returns an array of Clavier objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Clavier
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

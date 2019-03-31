<?php

namespace App\Repository;

use App\Entity\SpottedCases;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method SpottedCases|null find($id, $lockMode = null, $lockVersion = null)
 * @method SpottedCases|null findOneBy(array $criteria, array $orderBy = null)
 * @method SpottedCases[]    findAll()
 * @method SpottedCases[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SpottedCasesRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, SpottedCases::class);
    }

    // /**
    //  * @return SpottedCases[] Returns an array of SpottedCases objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SpottedCases
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

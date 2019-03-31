<?php

namespace App\Repository;

use App\Entity\AgeRange;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method AgeRange|null find($id, $lockMode = null, $lockVersion = null)
 * @method AgeRange|null findOneBy(array $criteria, array $orderBy = null)
 * @method AgeRange[]    findAll()
 * @method AgeRange[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AgeRangeRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, AgeRange::class);
    }

    // /**
    //  * @return AgeRange[] Returns an array of AgeRange objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?AgeRange
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

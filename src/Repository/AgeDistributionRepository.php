<?php

namespace App\Repository;

use App\Entity\AgeDistribution;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method AgeDistribution|null find($id, $lockMode = null, $lockVersion = null)
 * @method AgeDistribution|null findOneBy(array $criteria, array $orderBy = null)
 * @method AgeDistribution[]    findAll()
 * @method AgeDistribution[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AgeDistributionRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, AgeDistribution::class);
    }

    // /**
    //  * @return AgeDistribution[] Returns an array of AgeDistribution objects
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
    public function findOneBySomeField($value): ?AgeDistribution
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

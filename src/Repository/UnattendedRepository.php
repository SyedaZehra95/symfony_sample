<?php

namespace App\Repository;

use App\Entity\Unattended;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Unattended|null find($id, $lockMode = null, $lockVersion = null)
 * @method Unattended|null findOneBy(array $criteria, array $orderBy = null)
 * @method Unattended[]    findAll()
 * @method Unattended[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UnattendedRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Unattended::class);
    }

    // /**
    //  * @return Unattended[] Returns an array of Unattended objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Unattended
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

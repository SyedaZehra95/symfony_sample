<?php

namespace App\Repository;

use App\Entity\InboundOutbound;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method InboundOutbound|null find($id, $lockMode = null, $lockVersion = null)
 * @method InboundOutbound|null findOneBy(array $criteria, array $orderBy = null)
 * @method InboundOutbound[]    findAll()
 * @method InboundOutbound[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InboundOutboundRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, InboundOutbound::class);
    }

    // /**
    //  * @return InboundOutbound[] Returns an array of InboundOutbound objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?InboundOutbound
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

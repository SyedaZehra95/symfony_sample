<?php

namespace App\Repository;

use App\Entity\UserOtp;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * @method UserOtp|null find($id, $lockMode = null, $lockVersion = null)
 * @method UserOtp|null findOneBy(array $criteria, array $orderBy = null)
 * @method UserOtp[]    findAll()
 * @method UserOtp[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserOTPRepository extends ServiceEntityRepository
{
    private $manager;
    public function __construct(RegistryInterface $registry, ObjectManager $manager)
    {
        parent::__construct($registry, UserOtp::class);
        $this->manager = $manager;
    }



    /**
     * @param $record
     * @param ObjectManager $manager
     */
    public function createOTP($OTPRecord)
    {

        $otp = new UserOtp();
        $otp->setDeviceId($OTPRecord->deviceId);
        $otp->setMobileNumber($OTPRecord->mobile);
        $otp->setOtp($OTPRecord->OTPNumber);
        $otp->setType($OTPRecord->type);
        $this->manager->persist($otp);
        $this->manager->flush();
    }

    /**
     * @param $OTPRecord
     * @return mixed
     */
    public function findDeviceByOTP($OTPRecord)
    {

        $date = date("Y-m-d H:i:s");
        $time = strtotime($date);
        $time = $time - (30 * 60);
        $current_time = date("Y-m-d H:i:s", $time);

        return $this->createQueryBuilder('u')
            ->andWhere('u.mobileNumber = :mobileNumber')
            ->andWhere('u.otp = :otp')
            ->andWhere('u.type = :type')
            ->andWhere('u.deviceId = :deviceId')
            ->andWhere('u.CreatedAt >= :current_time')
            ->setParameter('mobileNumber', $OTPRecord->mobile)
            ->setParameter('otp', $OTPRecord->OTPNumber)
            ->setParameter('deviceId', $OTPRecord->deviceId)
            ->setParameter('type', $OTPRecord->type)
            ->setParameter('current_time', $current_time)
            ->getQuery()
            ->getResult();
    }


    /**
     * @param $OTPRecord
     * @return mixed
     */
    public function deleteOTP($OTPRecord)
    {

        return $this->createQueryBuilder('u')
            ->delete('UserOtp','u')
            ->andWhere('u.mobileNumber = :mobileNumber')
            ->andWhere('u.otp = :otp')
            ->andWhere('u.type = :type')
            ->andWhere('u.deviceId = :deviceId')
            ->setParameter('mobileNumber', $OTPRecord->mobile)
            ->setParameter('otp', $OTPRecord->OTPNumber)
            ->setParameter('deviceId', $OTPRecord->deviceId)
            ->setParameter('type', $OTPRecord->type)->getQuery()->execute();
    }
}

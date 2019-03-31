<?php

namespace App\Repository;

use App\Entity\UserProfile;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * @method UserProfile|null find($id, $lockMode = null, $lockVersion = null)
 * @method UserProfile|null findOneBy(array $criteria, array $orderBy = null)
 * @method UserProfile[]    findAll()
 * @method UserProfile[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserProfileRepository extends ServiceEntityRepository
{
    private $manager;

    /**
     * UserProfileRepository constructor.
     * @param RegistryInterface $registry
     * @param ObjectManager $manager
     */
    public function __construct(RegistryInterface $registry, ObjectManager $manager)
    {
        parent::__construct($registry, UserProfile::class);
        $this->manager = $manager;
    }

    /**
     * @param $customerData
     * @param ObjectManager $manager
     */
    public function createCustomer($customerData)
    {

        $customer = new UserProfile();
        $customer->setFirstName($customerData->firstName);
        $customer->setLastName($customerData->lastName);
        $customer->setEmail($customerData->email);
        $customer->setMobileNumber($customerData->mobile);
        $customer->setUserId($customerData->internalId);
        $customer->setNewsletterOpt($customerData->newsletter_opt);
        $customer->setOrderUpdateOpt($customerData->orderupdate_opt);
        $customer->setPromotionOpt($customerData->promotion_opt);
        $customer->setDeviceId($customerData->deviceId);

        $this->manager->persist($customer);
        $this->manager->flush();
    }


    /**
     * @param $customerData
     * @param bool $isDeviceCheck
     * @return mixed
     */
    public function findByCustomerMobileDevice($customerData, $isDeviceCheck)
    {
        if (!$isDeviceCheck) {
            return $this->createQueryBuilder('u')
                ->andWhere('u.mobileNumber = :mobileNumber')
                ->andWhere('u.deviceId = :deviceId')
                ->setParameter('mobileNumber', $customerData->mobile)
                ->setParameter('deviceId', $customerData->deviceId)
                ->getQuery()
                ->getResult();
        } else {
            return $this->createQueryBuilder('u')
                ->andWhere('u.deviceId = :deviceId')
                ->setParameter('deviceId', $customerData->deviceId)
                ->getQuery()
                ->getResult();
        }
    }

}

<?php

namespace App\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\GetResponseForExceptionEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\InboundOutbound;

class InboundOutBoundSubscriber implements EventSubscriberInterface
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager) {
        $this->entityManager = $entityManager;
    }

    public static function getSubscribedEvents()
    {
       // return the subscribed events, their methods and priorities
        return [
           KernelEvents::REQUEST => 'inBoundRequest',
           KernelEvents::RESPONSE => 'outBoundResponse'
        ];
    }

	public function inBoundRequest(GetResponseEvent $event)
    {
        // log your incoming requests
        $request = $event->getRequest();
        $data = json_decode($request->getContent(), true);
        // store req if ApiKey Exists
        if(isset($data['ApiKey'])) {
            $inbound = new InboundOutbound();
            $inbound->setRequestData($data);
            $inbound->setDeviceName($data['DeviceId']);
            $inbound->setCreatedTime(new \DateTime('now'));

            if (!$this->entityManager->isOpen()) {
                $this->entityManager = $this->entityManager->create(
                    $this->entityManager->getConnection(), $this->entityManager->getConfiguration()
                );
            }

            $this->entityManager->persist($inbound);
            $this->entityManager->flush();
        }
	}

	public function outBoundResponse(FilterResponseEvent $event)
    {
        // log you out going requests
	}

}

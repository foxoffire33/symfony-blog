<?php

namespace App\EventListener;

use Doctrine\Bundle\DoctrineBundle\EventSubscriber\EventSubscriberInterface;
use Doctrine\ORM\Events;
use Doctrine\Persistence\Event\LifecycleEventArgs;
use Symfony\Component\Security\Core\Security;

class DatabaseActivitySubscriber implements EventSubscriberInterface
{

    public function __construct(private readonly Security $security)
    {
    }

    public function getSubscribedEvents()
    {
        return [Events::prePersist];
    }

    public function prePersist(LifecycleEventArgs $args): void
    {
        $entity = $args->getObject();
        $class = $args->getObjectManager()->getClassMetadata(get_class($entity));
        if($class->hasAssociation('createdBy')){
            $entity->setCreatedBy($this->security->getUser());
        }
    }
}
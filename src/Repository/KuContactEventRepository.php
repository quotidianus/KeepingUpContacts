<?php

namespace App\Repository;

use App\Entity\KuContactEvent;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method KuContactEvent|null find($id, $lockMode = null, $lockVersion = null)
 * @method KuContactEvent|null findOneBy(array $criteria, array $orderBy = null)
 * @method KuContactEvent[]    findAll()
 * @method KuContactEvent[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class KuContactEventRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, KuContactEvent::class);
    }

    /*
    public function findBySomething($value)
    {
        return $this->createQueryBuilder('k')
            ->where('k.something = :value')->setParameter('value', $value)
            ->orderBy('k.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */
}

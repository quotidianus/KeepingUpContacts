<?php

namespace App\Repository;

use App\Entity\KuEvent;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method KuEvent|null find($id, $lockMode = null, $lockVersion = null)
 * @method KuEvent|null findOneBy(array $criteria, array $orderBy = null)
 * @method KuEvent[]    findAll()
 * @method KuEvent[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class KuEventRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, KuEvent::class);
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

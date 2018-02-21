<?php

namespace App\Repository;

use App\Entity\KuEventGroup;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method KuEventGroup|null find($id, $lockMode = null, $lockVersion = null)
 * @method KuEventGroup|null findOneBy(array $criteria, array $orderBy = null)
 * @method KuEventGroup[]    findAll()
 * @method KuEventGroup[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class KuEventGroupRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, KuEventGroup::class);
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

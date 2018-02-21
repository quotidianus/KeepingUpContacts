<?php

namespace App\Repository;

use App\Entity\KuContactGroup;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method KuContactGroup|null find($id, $lockMode = null, $lockVersion = null)
 * @method KuContactGroup|null findOneBy(array $criteria, array $orderBy = null)
 * @method KuContactGroup[]    findAll()
 * @method KuContactGroup[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class KuContactGroupRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, KuContactGroup::class);
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

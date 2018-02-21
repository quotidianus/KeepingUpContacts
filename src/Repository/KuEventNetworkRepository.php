<?php

namespace App\Repository;

use App\Entity\KuEventNetwork;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method KuEventNetwork|null find($id, $lockMode = null, $lockVersion = null)
 * @method KuEventNetwork|null findOneBy(array $criteria, array $orderBy = null)
 * @method KuEventNetwork[]    findAll()
 * @method KuEventNetwork[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class KuEventNetworkRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, KuEventNetwork::class);
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

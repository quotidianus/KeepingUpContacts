<?php

namespace App\Repository;

use App\Entity\KuContactNetwork;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method KuContactNetwork|null find($id, $lockMode = null, $lockVersion = null)
 * @method KuContactNetwork|null findOneBy(array $criteria, array $orderBy = null)
 * @method KuContactNetwork[]    findAll()
 * @method KuContactNetwork[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class KuContactNetworkRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, KuContactNetwork::class);
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

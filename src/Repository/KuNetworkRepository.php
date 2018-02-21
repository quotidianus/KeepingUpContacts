<?php

namespace App\Repository;

use App\Entity\KuNetwork;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method KuNetwork|null find($id, $lockMode = null, $lockVersion = null)
 * @method KuNetwork|null findOneBy(array $criteria, array $orderBy = null)
 * @method KuNetwork[]    findAll()
 * @method KuNetwork[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class KuNetworkRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, KuNetwork::class);
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

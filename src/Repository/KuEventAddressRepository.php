<?php

namespace App\Repository;

use App\Entity\KuEventAddress;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method KuEventAddress|null find($id, $lockMode = null, $lockVersion = null)
 * @method KuEventAddress|null findOneBy(array $criteria, array $orderBy = null)
 * @method KuEventAddress[]    findAll()
 * @method KuEventAddress[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class KuEventAddressRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, KuEventAddress::class);
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

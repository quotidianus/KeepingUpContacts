<?php

namespace App\Repository;

use App\Entity\KuAddress;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method KuAddress|null find($id, $lockMode = null, $lockVersion = null)
 * @method KuAddress|null findOneBy(array $criteria, array $orderBy = null)
 * @method KuAddress[]    findAll()
 * @method KuAddress[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class KuAddressRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, KuAddress::class);
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

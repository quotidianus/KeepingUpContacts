<?php

namespace App\Repository;

use App\Entity\KuContactAddress;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method KuContactAddress|null find($id, $lockMode = null, $lockVersion = null)
 * @method KuContactAddress|null findOneBy(array $criteria, array $orderBy = null)
 * @method KuContactAddress[]    findAll()
 * @method KuContactAddress[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class KuContactAddressRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, KuContactAddress::class);
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

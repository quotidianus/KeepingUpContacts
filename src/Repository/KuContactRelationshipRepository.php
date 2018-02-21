<?php

namespace App\Repository;

use App\Entity\KuContactRelationship;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method KuContactRelationship|null find($id, $lockMode = null, $lockVersion = null)
 * @method KuContactRelationship|null findOneBy(array $criteria, array $orderBy = null)
 * @method KuContactRelationship[]    findAll()
 * @method KuContactRelationship[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class KuContactRelationshipRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, KuContactRelationship::class);
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

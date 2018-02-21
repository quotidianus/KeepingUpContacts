<?php

namespace App\Repository;

use App\Entity\KuRelationship;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method KuRelationship|null find($id, $lockMode = null, $lockVersion = null)
 * @method KuRelationship|null findOneBy(array $criteria, array $orderBy = null)
 * @method KuRelationship[]    findAll()
 * @method KuRelationship[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class KuRelationshipRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, KuRelationship::class);
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

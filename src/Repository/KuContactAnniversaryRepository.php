<?php

namespace App\Repository;

use App\Entity\KuContactAnniversary;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method KuContactAnniversary|null find($id, $lockMode = null, $lockVersion = null)
 * @method KuContactAnniversary|null findOneBy(array $criteria, array $orderBy = null)
 * @method KuContactAnniversary[]    findAll()
 * @method KuContactAnniversary[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class KuContactAnniversaryRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, KuContactAnniversary::class);
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

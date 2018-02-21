<?php

namespace App\Repository;

use App\Entity\KuAnniversary;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method KuAnniversary|null find($id, $lockMode = null, $lockVersion = null)
 * @method KuAnniversary|null findOneBy(array $criteria, array $orderBy = null)
 * @method KuAnniversary[]    findAll()
 * @method KuAnniversary[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class KuAnniversaryRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, KuAnniversary::class);
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

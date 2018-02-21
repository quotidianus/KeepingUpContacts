<?php

namespace App\Repository;

use App\Entity\KuEventEmail;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method KuEventEmail|null find($id, $lockMode = null, $lockVersion = null)
 * @method KuEventEmail|null findOneBy(array $criteria, array $orderBy = null)
 * @method KuEventEmail[]    findAll()
 * @method KuEventEmail[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class KuEventEmailRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, KuEventEmail::class);
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

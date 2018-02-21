<?php

namespace App\Repository;

use App\Entity\KuEmail;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method KuEmail|null find($id, $lockMode = null, $lockVersion = null)
 * @method KuEmail|null findOneBy(array $criteria, array $orderBy = null)
 * @method KuEmail[]    findAll()
 * @method KuEmail[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class KuEmailRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, KuEmail::class);
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

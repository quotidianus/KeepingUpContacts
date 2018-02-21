<?php

namespace App\Repository;

use App\Entity\KuUrl;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method KuUrl|null find($id, $lockMode = null, $lockVersion = null)
 * @method KuUrl|null findOneBy(array $criteria, array $orderBy = null)
 * @method KuUrl[]    findAll()
 * @method KuUrl[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class KuUrlRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, KuUrl::class);
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

<?php

namespace App\Repository;

use App\Entity\KuContactUrl;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method KuContactUrl|null find($id, $lockMode = null, $lockVersion = null)
 * @method KuContactUrl|null findOneBy(array $criteria, array $orderBy = null)
 * @method KuContactUrl[]    findAll()
 * @method KuContactUrl[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class KuContactUrlRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, KuContactUrl::class);
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

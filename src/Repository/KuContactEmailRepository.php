<?php

namespace App\Repository;

use App\Entity\KuContactEmail;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method KuContactEmail|null find($id, $lockMode = null, $lockVersion = null)
 * @method KuContactEmail|null findOneBy(array $criteria, array $orderBy = null)
 * @method KuContactEmail[]    findAll()
 * @method KuContactEmail[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class KuContactEmailRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, KuContactEmail::class);
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

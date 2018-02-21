<?php

namespace App\Repository;

use App\Entity\KuCountry;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method KuCountry|null find($id, $lockMode = null, $lockVersion = null)
 * @method KuCountry|null findOneBy(array $criteria, array $orderBy = null)
 * @method KuCountry[]    findAll()
 * @method KuCountry[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class KuCountryRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, KuCountry::class);
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

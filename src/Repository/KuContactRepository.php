<?php

namespace App\Repository;

use App\Entity\KuContact;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method KuContact|null find($id, $lockMode = null, $lockVersion = null)
 * @method KuContact|null findOneBy(array $criteria, array $orderBy = null)
 * @method KuContact[]    findAll()
 * @method KuContact[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class KuContactRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, KuContact::class);
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

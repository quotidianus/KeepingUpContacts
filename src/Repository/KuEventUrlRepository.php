<?php

namespace App\Repository;

use App\Entity\KuEventUrl;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method KuEventUrl|null find($id, $lockMode = null, $lockVersion = null)
 * @method KuEventUrl|null findOneBy(array $criteria, array $orderBy = null)
 * @method KuEventUrl[]    findAll()
 * @method KuEventUrl[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class KuEventUrlRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, KuEventUrl::class);
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

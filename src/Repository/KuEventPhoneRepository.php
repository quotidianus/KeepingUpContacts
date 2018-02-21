<?php

namespace App\Repository;

use App\Entity\KuEventPhone;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method KuEventPhone|null find($id, $lockMode = null, $lockVersion = null)
 * @method KuEventPhone|null findOneBy(array $criteria, array $orderBy = null)
 * @method KuEventPhone[]    findAll()
 * @method KuEventPhone[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class KuEventPhoneRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, KuEventPhone::class);
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

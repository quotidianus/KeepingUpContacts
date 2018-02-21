<?php

namespace App\Repository;

use App\Entity\KuContactPhone;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method KuContactPhone|null find($id, $lockMode = null, $lockVersion = null)
 * @method KuContactPhone|null findOneBy(array $criteria, array $orderBy = null)
 * @method KuContactPhone[]    findAll()
 * @method KuContactPhone[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class KuContactPhoneRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, KuContactPhone::class);
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

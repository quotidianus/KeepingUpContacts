<?php

namespace App\Repository;

use App\Entity\KuPhone;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method KuPhone|null find($id, $lockMode = null, $lockVersion = null)
 * @method KuPhone|null findOneBy(array $criteria, array $orderBy = null)
 * @method KuPhone[]    findAll()
 * @method KuPhone[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class KuPhoneRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, KuPhone::class);
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

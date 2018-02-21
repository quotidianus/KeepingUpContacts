<?php

namespace App\Repository;

use App\Entity\KuEventCustomField;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method KuEventCustomField|null find($id, $lockMode = null, $lockVersion = null)
 * @method KuEventCustomField|null findOneBy(array $criteria, array $orderBy = null)
 * @method KuEventCustomField[]    findAll()
 * @method KuEventCustomField[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class KuEventCustomFieldRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, KuEventCustomField::class);
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

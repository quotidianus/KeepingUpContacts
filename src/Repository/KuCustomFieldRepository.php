<?php

namespace App\Repository;

use App\Entity\KuCustomField;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method KuCustomField|null find($id, $lockMode = null, $lockVersion = null)
 * @method KuCustomField|null findOneBy(array $criteria, array $orderBy = null)
 * @method KuCustomField[]    findAll()
 * @method KuCustomField[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class KuCustomFieldRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, KuCustomField::class);
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

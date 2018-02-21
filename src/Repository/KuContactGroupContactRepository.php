<?php

namespace App\Repository;

use App\Entity\KuContactGroupContact;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method KuContactGroupContact|null find($id, $lockMode = null, $lockVersion = null)
 * @method KuContactGroupContact|null findOneBy(array $criteria, array $orderBy = null)
 * @method KuContactGroupContact[]    findAll()
 * @method KuContactGroupContact[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class KuContactGroupContactRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, KuContactGroupContact::class);
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

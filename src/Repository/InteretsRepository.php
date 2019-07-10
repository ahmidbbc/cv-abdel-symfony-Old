<?php

namespace App\Repository;

use App\Entity\Interets;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Interets|null find($id, $lockMode = null, $lockVersion = null)
 * @method Interets|null findOneBy(array $criteria, array $orderBy = null)
 * @method Interets[]    findAll()
 * @method Interets[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InteretsRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Interets::class);
    }

    // /**
    //  * @return Interets[] Returns an array of Interets objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Interets
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

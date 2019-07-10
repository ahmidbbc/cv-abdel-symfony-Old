<?php

namespace App\Repository;

use App\Entity\Coordonnees;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Coordonnees|null find($id, $lockMode = null, $lockVersion = null)
 * @method Coordonnees|null findOneBy(array $criteria, array $orderBy = null)
 * @method Coordonnees[]    findAll()
 * @method Coordonnees[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CoordonneesRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Coordonnees::class);
    }

    // /**
    //  * @return Coordonnees[] Returns an array of Coordonnees objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Coordonnees
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

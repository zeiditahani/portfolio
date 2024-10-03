<?php

namespace App\Repository;

use App\Entity\Socialmedia;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Socialmedia>
 *
 * @method Socialmedia|null find($id, $lockMode = null, $lockVersion = null)
 * @method Socialmedia|null findOneBy(array $criteria, array $orderBy = null)
 * @method Socialmedia[]    findAll()
 * @method Socialmedia[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SocialmediaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Socialmedia::class);
    }

//    /**
//     * @return Socialmedia[] Returns an array of Socialmedia objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('s.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Socialmedia
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}

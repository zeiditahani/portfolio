<?php

namespace App\Repository;

use App\Entity\Langage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Langage>
 *
 * @method Langage|null find($id, $lockMode = null, $lockVersion = null)
 * @method Langage|null findOneBy(array $criteria, array $orderBy = null)
 * @method Langage[]    findAll()
 * @method Langage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LangageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Langage::class);
    }

//    /**
//     * @return Langage[] Returns an array of Langage objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('l')
//            ->andWhere('l.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('l.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Langage
//    {
//        return $this->createQueryBuilder('l')
//            ->andWhere('l.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}

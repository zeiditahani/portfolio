<?php

namespace App\Repository;

use App\Entity\Skills;
use App\Entity\Setting;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Skills>
 *
 * @method Skills|null find($id, $lockMode = null, $lockVersion = null)
 * @method Skills|null findOneBy(array $criteria, array $orderBy = null)
 * @method Skills[]    findAll()
 * @method Skills[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SkillsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Skills::class);
    }

       /**
     * @return Skills[] Returns an array of Skills objects
     */
    public function findByExampleField($value): array
    {
        return $this->createQueryBuilder('b')
           // ->andWhere('b.exampleField = :val')
           // ->setParameter('val', $value)
            //->orderBy('b.id', 'ASC')
            ->setMaxResults($value)
            ->getQuery()
            ->getResult()
        ;
    }

//    public function findOneBySomeField($value): ?Skills
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
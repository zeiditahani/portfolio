<?php

namespace App\Repository;

use App\Entity\Skillsection;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Skillsection>
 *
 * @method Skillsection|null find($id, $lockMode = null, $lockVersion = null)
 * @method Skillsection|null findOneBy(array $criteria, array $orderBy = null)
 * @method Skillsection[]    findAll()
 * @method Skillsection[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SkillsectionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Skillsection::class);
    }

//    /**
//     * @return Skillsection[] Returns an array of Skillsection objects
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

//    public function findOneBySomeField($value): ?Skillsection
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}

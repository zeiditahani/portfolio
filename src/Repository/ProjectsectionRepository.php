<?php

namespace App\Repository;

use App\Entity\Projectsection;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Projectsection>
 *
 * @method Projectsection|null find($id, $lockMode = null, $lockVersion = null)
 * @method Projectsection|null findOneBy(array $criteria, array $orderBy = null)
 * @method Projectsection[]    findAll()
 * @method Projectsection[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProjectsectionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Projectsection::class);
    }

//    /**
//     * @return Projectsection[] Returns an array of Projectsection objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Projectsection
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}

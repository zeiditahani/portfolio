<?php

namespace App\Repository;

use App\Entity\Projectstype;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Projectstype>
 *
 * @method Projectstype|null find($id, $lockMode = null, $lockVersion = null)
 * @method Projectstype|null findOneBy(array $criteria, array $orderBy = null)
 * @method Projectstype[]    findAll()
 * @method Projectstype[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProjectstypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Projectstype::class);
    }
    public function findAllWithProjects()
    {
        return $this->createQueryBuilder('pt')
            ->leftJoin('pt.projects', 'p')
            ->addSelect('p')
            ->getQuery()
            ->getResult();
    }

//    /**
//     * @return Projectstype[] Returns an array of Projectstype objects
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

//    public function findOneBySomeField($value): ?Projectstype
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}

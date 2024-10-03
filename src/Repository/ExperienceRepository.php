<?php

namespace App\Repository;

use App\Entity\Experience;
use App\Entity\Setting;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Experience>
 *
 * @method Experience|null find($id, $lockMode = null, $lockVersion = null)
 * @method Experience|null findOneBy(array $criteria, array $orderBy = null)
 * @method Experience[]    findAll()
 * @method Experience[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ExperienceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Experience::class);
    }

    /**
     * @return Experience[] Returns an array of Experience objects
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

//    public function findOneBySomeField($value): ?Experience
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}


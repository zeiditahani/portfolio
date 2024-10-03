<?php

namespace App\Repository;

use App\Entity\Contactsection;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Contactsection>
 *
 * @method Contactsection|null find($id, $lockMode = null, $lockVersion = null)
 * @method Contactsection|null findOneBy(array $criteria, array $orderBy = null)
 * @method Contactsection[]    findAll()
 * @method Contactsection[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ContactsectionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Contactsection::class);
    }

//    /**
//     * @return Contactsection[] Returns an array of Contactsection objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Contactsection
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}

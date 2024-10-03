<?php

namespace App\Repository;

use App\Entity\Setting;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Setting>
 *
 * @method Setting|null find($id, $lockMode = null, $lockVersion = null)
 * @method Setting|null findOneBy(array $criteria, array $orderBy = null)
 * @method Setting[]    findAll()
 * @method Setting[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SettingRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Setting::class);
    }

    public function returnMaxSkillsValue()
    {
        $conn = $this->getEntityManager()->getConnection();
        $sql = 'SELECT MAX(maxskills) AS max_value FROM setting';
        $stmt = $conn->prepare($sql);
        $resultSet = $stmt->executeQuery();

        // Fetch the maximum value
        return $resultSet->fetchOne(); // or $stmt->fetchColumn();
    }
    public function returnMaxExperienceValue()
    {
        $conn = $this->getEntityManager()->getConnection();
        $sql = 'SELECT MAX(maxexperience) AS max_value FROM setting';
        $stmt = $conn->prepare($sql);
        $resultSet = $stmt->executeQuery();

        // Fetch the maximum value
        return $resultSet->fetchOne(); // or $stmt->fetchColumn();
    }
    public function returnMaxProjectsValue()
    {
        $conn = $this->getEntityManager()->getConnection();
        $sql = 'SELECT MAX(maxprojects) AS max_value FROM setting';
        $stmt = $conn->prepare($sql);
        $resultSet = $stmt->executeQuery();

        // Fetch the maximum value
        return $resultSet->fetchOne(); // or $stmt->fetchColumn();
    }




      
//    /**
//     * @return Setting[] Returns an array of Setting objects
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

//    public function findOneBySomeField($value): ?Setting
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}

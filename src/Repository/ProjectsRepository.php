<?php

namespace App\Repository;

use App\Entity\Projects;
use App\Entity\Setting;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Projects>
 *
 * @method Projects|null find($id, $lockMode = null, $lockVersion = null)
 * @method Projects|null findOneBy(array $criteria, array $orderBy = null)
 * @method Projects[]    findAll()
 * @method Projects[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProjectsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Projects::class);
    }
    /**
    * @return Projects[] Returns an array of Projects objects
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

//    public function findOneBySomeField($value): ?Projects
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}















    ///**
     //* @return Projects[] Returns an array of Projects objects
     //*/
    //public function findByExampleField(): array
    //{
        // Récupérer la valeur de la table des paramètres
       // $settingValue = $this->getEntityManager()
        //->getRepository(Setting::class)
        //->findOneBy(['name' => 'maxprojects']);
        // Vérifier si la valeur a été trouvée
         // if ($settingValue) {
         // $numberOfObjects = $settingValue->getMaxskills();
        // Utiliser la valeur dans votre requête pour limiter le nombre d'objets récupérés

       // return $this->createQueryBuilder('p')
//          //  ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
          //  ->setMaxResults($numberOfObjects)
           // ->getQuery()
           // ->getResult()
      //  ;
   // } else {
       // throw $this->createNotFoundException(
       // 'Objet inexsistant'
       //  );
    //return [];
   // }

//    public function findOneBySomeField($value): ?Projects
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
//}


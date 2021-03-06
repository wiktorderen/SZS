<?php

namespace App\Repository;


use App\Entity\Training;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Training|null find($id, $lockMode = null, $lockVersion = null)
 * @method Training|null findOneBy(array $criteria, array $orderBy = null)
 * @method Training[]    findAll()
 * @method Training[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TrainingRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Training::class);
    }

    public function CountTraining(){
        $qb = $this->createQueryBuilder('p')
            ->select('count(p.id)')
            ->getQuery()
            ->getSingleScalarResult();
        return $qb;
    }

    public function GetTrainingPreview($Maxtrainings){
        $query = $this->createQueryBuilder('u')
            ->select('u')
            ->orderBy('u.id')
            ->setFirstResult(0)
            ->setMaxResults($Maxtrainings)
            ->getQuery()
            ->getArrayResult();
        return $query;

    }

    public function getTrainer()
    {
        return $this->createQueryBuilder('k')
            ->select('k')
            ->innerJoin('App\Entity\Trainer','s','WITH','k.trainer = s.id')
            ->getQuery()
            ->getResult();
    }
    public function test()
    {
        return $this->createQueryBuilder('k')
            ->select('k')
            ->innerJoin('App\Entity\Trainer','s','WITH','k.trainer = s.id')
            ->getQuery()
            ->getResult();
    }

    public function findTrainingByName($name) {
        $query = $this->createQueryBuilder('t')
            ->where('t.name LIKE :name')
            ->setParameter('name','%'.$name.'%')
            ->getQuery();

        return $query->getResult();
    }
    // /**
    //  * @return Training[] Returns an array of Training objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Training
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

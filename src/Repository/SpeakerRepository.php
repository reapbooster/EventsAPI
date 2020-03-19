<?php

namespace App\Repository;

use App\Entity\Panel;
use App\Entity\Speaker;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Speaker|null findOneBy(array $criteria, array $orderBy = null)
 * @method Speaker[]    findAll()
 * @method Speaker[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SpeakerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Speaker::class);
    }

    public function find($id, $lockMode = null, $lockVersion = null) {

      $toReturn = $this->createQueryBuilder('s')
        ->andWhere('s.SpkrID = :val')
        ->setParameter('val', $id)
        ->orderBy('s.SpkrID', 'ASC')
        ->setMaxResults(10)
        ->getQuery()
        ->getResult();

      if (!empty($toReturn) && is_array($toReturn)) {
      $toReturn = array_shift($toReturn);
    }
      if ($toReturn instanceof Speaker) {
        return $toReturn;
      }
      return null;
    }

    // /**
    //  * @return Speaker[] Returns an array of Speaker objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Speaker
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

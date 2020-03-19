<?php

namespace App\Repository;

use App\Entity\Panel;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Kint\Kint;

/**
 * @method Panel|null find($id, $lockMode = null, $lockVersion = null)
 * @method Panel|null findOneBy(array $criteria, array $orderBy = null)
 * @method Panel[]    findAll()
 * @method Panel[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PanelRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Panel::class);
    }

    public function findByEventid($value) {
      $this->createQueryBuilder('p')
        ->andWhere('p.EventID = :val')
        ->setParameter('val', $value)
        ->setMaxResults(10)
        ->getQuery()
        ->getResult();
    }

    public function find($id, $lockMode = null, $lockVersion = null): Panel {
      [$EventID, $PID] = explode("::", $id);
      $toReturn = $this->createQueryBuilder('p')
        ->andWhere('p.EventID = :EventID')
        ->andWhere('p.PID = :PID')
        ->setParameter("EventID", $EventID)
        ->setParameter('PID', $PID)
        ->setMaxResults(1)
        ->getQuery()
        ->getResult();
      if (!empty($toReturn) && is_array($toReturn)) {
        $toReturn = array_shift($toReturn);
      }
      if ($toReturn instanceof Panel) {
        return $toReturn;
      }
    }

    // /**
    //  * @return Panel[] Returns an array of Panel objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Panel
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

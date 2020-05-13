<?php

namespace App\Repository;

use App\Entity\Event;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Event|null find($id, $lockMode = null, $lockVersion = null)
 * @method Event|null findOneBy(array $criteria, array $orderBy = null)
 * @method Event[]    findAll()
 * @method Event[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EventRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Event::class);
    }


  /**
   * Finds all entities in the repository.
   *
   * @return array The entities.
   */
  public function findAll()
  {
    return $this->createQueryBuilder('e')
      ->groupBy('e.eventid')
      ->getQuery()
      ->execute();
  }
    /**
    public function findByEventID($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.field_gr = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */
    /**
    public function findOneByEventID($value): ?Event
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.EventID = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }*/
}

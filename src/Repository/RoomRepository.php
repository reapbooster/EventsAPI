<?php

namespace App\Repository;

use App\Entity\Event;
use App\Entity\Panel;
use App\Entity\Room;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\Query\ResultSetMapping;
use Doctrine\ORM\Query\ResultSetMappingBuilder;

/**
 * @method Room|null find($id, $lockMode = null, $lockVersion = null)
 * @method Room|null findOneBy(array $criteria, array $orderBy = null)
 * @method Room[]    findAll()
 * @method Room[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RoomRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Room::class);
    }

  public function find($id, $lockMode = null, $lockVersion = null): Panel {
    return $this->createQueryBuilder('r')
      ->andWhere('r.room_id = :ROOMID')
      ->setParameter("ROOMID", $id)
      ->setMaxResults(1)
      ->getQuery()
      ->getSingleResult();
  }
  /*
  public function findRoomForPanel(Panel $panel) {
    $rsm = new ResultSetMappingBuilder($this->getEntityManager());
    $rsm->addRootEntityFromClassMetadata("App\Entity\Room","r");
      return $this->getEntityManager()
        ->createNativeQuery(
          "select 
                r.room_id, 
                r.rName, 
                r.schoolhousecap, 
                r.roundscap, 
                r.theatercap, 
                r.hollowSquare, 
                r.conference, 
                r.notes, 
                r.sortOrder,
                r.roomGroup,
                r.datecreated,
                r.datemodified,
                r.eventType,
                r.lounge,
                r.reception,
                r.tour,
                r.hollowCircle,
                r.ushape
                from gcHiltonRooms r 
                  join gcroomlinks rl 
                  on r.room_id = rl.room_id 
                  and rl.panel_id = :PANEL",
          $rsm)
        ->setParameter("PANEL", $panel->getId())
        ->getSingleResult();
  }

    // /**
    //  * @return Room[] Returns an array of Room objects
    //  */
    /*

    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Room
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}

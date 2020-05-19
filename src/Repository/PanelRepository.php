<?php

namespace App\Repository;

use App\Entity\Event;
use App\Entity\Panel;
use App\Entity\Room;
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
        ->getOneOrNullResult();
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
    **/

    public function findPanelsForRoom(Room $room, Event $event = null) {
      $toReturn = $this->createQueryBuilder('p')
        ->join('gcRoomLinks', "rl", "WITH", "p.ID = rl.panel_id and rl.room_id = :ROOM")
        ->setParameter("ROOM", $room->getId());
      if ($event instanceof Event) {
        $toReturn->andWhere('p.EventID = :EVENTID')
          ->setParameter('EVENTID', $event->getId());
      }
      return $toReturn->getQuery()->getResult();
    }

    /**
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

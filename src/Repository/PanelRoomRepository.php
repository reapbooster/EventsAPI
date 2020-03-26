<?php

namespace App\Repository;

use App\Entity\PanelRoom;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method PanelRoom|null find($id, $lockMode = null, $lockVersion = null)
 * @method PanelRoom|null findOneBy(array $criteria, array $orderBy = null)
 * @method PanelRoom[]    findAll()
 * @method PanelRoom[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PanelRoomRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PanelRoom::class);
    }

    // /**
    //  * @return PanelRooms[] Returns an array of PanelRooms objects
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
    public function findOneBySomeField($value): ?PanelRooms
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

<?php

namespace App\Repository;

use App\Entity\PanelTrack;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method PanelTrack|null find($id, $lockMode = null, $lockVersion = null)
 * @method PanelTrack|null findOneBy(array $criteria, array $orderBy = null)
 * @method PanelTrack[]    findAll()
 * @method PanelTrack[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PanelTrackRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PanelTrack::class);
    }

    // /**
    //  * @return PanelTracks[] Returns an array of PanelTracks objects
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
    public function findOneBySomeField($value): ?PanelTracks
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

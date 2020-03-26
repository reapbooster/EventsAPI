<?php

namespace App\Repository;

use App\Entity\PanelSpeaker;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method PanelSpeaker|null find($id, $lockMode = null, $lockVersion = null)
 * @method PanelSpeaker|null findOneBy(array $criteria, array $orderBy = null)
 * @method PanelSpeaker[]    findAll()
 * @method PanelSpeaker[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PanelSpeakerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PanelSpeaker::class);
    }

    // /**
    //  * @return PanelSpeakers[] Returns an array of PanelSpeakers objects
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
    public function findOneBySomeField($value): ?PanelSpeakers
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

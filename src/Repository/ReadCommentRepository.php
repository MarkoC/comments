<?php

namespace App\Repository;

use App\Entity\ReadComment;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ReadComment|null find($id, $lockMode = null, $lockVersion = null)
 * @method ReadComment|null findOneBy(array $criteria, array $orderBy = null)
 * @method ReadComment[]    findAll()
 * @method ReadComment[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReadCommentRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ReadComment::class);
    }

    // /**
    //  * @return ReadComment[] Returns an array of ReadComment objects
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
    public function findOneBySomeField($value): ?ReadComment
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

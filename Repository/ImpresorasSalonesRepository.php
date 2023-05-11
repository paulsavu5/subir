<?php

namespace App\Repository;

use App\Entity\ImpresorasSalones;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ImpresorasSalones>
 *
 * @method ImpresorasSalones|null find($id, $lockMode = null, $lockVersion = null)
 * @method ImpresorasSalones|null findOneBy(array $criteria, array $orderBy = null)
 * @method ImpresorasSalones[]    findAll()
 * @method ImpresorasSalones[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ImpresorasSalonesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ImpresorasSalones::class);
    }

    public function save(ImpresorasSalones $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ImpresorasSalones $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    // public function findAllColumnas(){
    //     return $this->getEntityManager()
    //         ->createQuery('
    //         SELECT post.Factura,	
    //            post.Fecha, 
    //            post.FechaHora,    
    //            post.Producto, 
    //            post.Referencia, 
    //            post.Cliente,
    //            post.Nombre,
    //            post.Modelo,
    //            post.Contrato, 
    //            post.idid, 
    //            post.DatosInst, 
    //            post.FechaInicio, 
    //            post.FechaFin,
    //            post.Cantidad, 
    //            post.Precio,
    //            post.Dto, 
    //            post.Total,
    //            post.OrdenLinea, 
    //            post.A4M, 
    //            post.CantidadA4M, 
    //            post.PrecioA4M, 
    //            post.DtoA4M,  
    //            post.TotalA4M, 
    //            post.A4C,
    //            post.CantidadA4C,
    //            post.PrecioA4C, 
    //            post.DtoA4C, 
    //            post.TotalA4C, 
    //            post.TOTM,
    //            post.CantidadTOTM, 
    //            post.PrecioTOTM, 
    //            post.DtoTOTM, 
    //            post.TotalTOTM, 
    //            post.TOTC, 
    //            post.CantidadTOTC, 
    //            post.PrecioTOTC,
    //            post.DtoTOTC, 
    //            post.TotalTOTC 
    //         FROM App:ImpresorasSalones post
    //         '
    //     )->getResult();
    // }

//    /**
//     * @return ImpresorasSalones[] Returns an array of ImpresorasSalones objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('i.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ImpresorasSalones
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}

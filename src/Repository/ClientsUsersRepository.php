<?php


namespace App\Repository;

use App\Entity\ClientsUsers;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method ClientsUsers|null find($id, $lockMode = null, $lockVersion = null)
 * @method ClientsUsers|null findOneBy(array $criteria, array $orderBy = null)
 * @method ClientsUsers[]    findAll()
 * @method ClientsUsers[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClientsUsersRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ClientsUsers::class);
    }




}
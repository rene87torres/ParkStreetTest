<?php

namespace Parkstreet\AppBundle\Entity\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;

/**
 * ClientRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ClientRepository extends EntityRepository
{    
    /**
     * Retrieve the set of clients filtered
     * (The lines commented are because I did not time to build the paginator in the view)
     * @param array $params
     * @return array
     */
    public function retrieveAllFiltered($ofset, $limit)
    {
        $query = $this->getEntityManager()->createQueryBuilder()
            ->select("c.id AS client_id,
                      c.name AS client_name")
            ->distinct()
            ->from($this->getEntityName(), "c")
            ->orderBy("c.name");
            //->setMaxResults($limit)
            //->setFirstResult($ofset);
         

        //$paginator = new Paginator($query);
        //$paginator->setUseOutputWalkers(false);

        return array('data' => $query->getQuery()->getArrayResult());//, 'total' => $paginator->count());
    }
    
    /**
     * Retrieve the set of clients
     * @param array $params
     * @return array
     */
    public function retrieveAll()
    {
        return $this->getEntityManager()->createQueryBuilder()
            ->select("c.id, c.name")
            ->distinct()
            ->from($this->getEntityName(), "c")
            ->getQuery()
            ->getArrayResult();
    }
    
    /**
     * Retrieve the client filtered by id
     * @param array $params
     * @return array
     */
    public function retrieveById()
    {
        return $this->getEntityManager()->createQueryBuilder()
            ->select("c.id, c.name")
            ->from($this->getEntityName(), "c")
            ->where('c.id = :id')
            ->setParameter('id', $id)
            ->getQuery()
            ->getArrayResult();
    }
}
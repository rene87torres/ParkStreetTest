<?php

namespace Parkstreet\AppBundle\Entity\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;

/**
 * ProductRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProductRepository extends EntityRepository
{
    /**
     * Retrieve the set of products
     * (The lines commented are because I did not time to build the paginator in the view)
     * @param array $params
     * @return array
     */
    public function retrieveAll($ofset, $limit)
    {
        $query = $this->getEntityManager()->createQueryBuilder()
            ->select("p.id AS product_id,
                      p.description AS product_description,
                      c.id AS client_id,
                      c.name AS client_name")
            ->distinct()
            ->from($this->getEntityName(), "p")
            ->innerJoin("p.client", "c")
            ->orderBy("p.description");
            //->setMaxResults($limit) 
            //->setFirstResult($ofset);
         

        //$paginator = new Paginator($query);
        //$paginator->setUseOutputWalkers(false);

        return array('data' => $query->getQuery()->getArrayResult()); //, 'total' => $paginator->count());
    }
    
    /**
     * Retrive the set of products filtered by client id
     * @param array $clientId
     * @return mixed
     */
    public function retrieveAllByClient($clientId)
    {
        return $this->getEntityManager()->createQueryBuilder()
            ->select("p.id, p.description")
            ->distinct()
            ->from($this->getEntityName(), "p")
            ->innerJoin("p.client", "c")
            ->where('c.id = :client_id')
            ->setParameter('client_id', $clientId)
            ->orderBy("p.description")
            ->getQuery()
            ->getArrayResult();
    }
    
    /**
     * Retrieve the product filtered by id
     * @param array $clientId
     * @return mixed
     */
    public function retrieveById($id)
    {
        return $this->getEntityManager()->createQueryBuilder()
            ->select("p.id, p.description")
            ->from($this->getEntityName(), "p")
            ->where('p.id = :id')
            ->setParameter('id', $id)
            ->getQuery()
            ->getArrayResult();
    }
}

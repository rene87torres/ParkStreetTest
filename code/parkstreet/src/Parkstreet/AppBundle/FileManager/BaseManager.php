<?php
/**
 * Author: Rene Torres
 */

namespace Parkstreet\AppBundle\FileManager;

use Doctrine\ORM\EntityManager;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage;

/**
 * Class BaseManager
 * @package Parkstreet\AppBundle\FileManager
 */
abstract class BaseManager
{
    const ADD = "add";
    const EDIT = "edit";

    protected $em;
    protected $token;
    protected $currentUser;
    protected $class;
    protected $repository;

    /**
     * BaseManager constructor.
     * @param EntityManager $em
     * @param TokenStorage $token
     * @param EmailInterface $email
     */
    public function __construct(EntityManager $em, TokenStorage $token)
    {
        $this->em = $em;
        $this->token = $token;
        $this->currentUser = $this->token->getToken()->getUser();
        $this->initRepository();
    }

    /**
     * Return the instance of EntityManager
     * @return EntityManager
     */
    public function getEntityManager()
    {
        return $this->em;
    }

    /**
     * Return the instance of TokenStorage
     * @return TokenStorage
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Return the current user
     * @return mixed
     */
    public function getUser()
    {
        return $this->currentUser;
    }

    /**
     * Set responsability to the child class to implement its repository
     */
    public abstract function initRepository();

    /**
     * Return the instance of repository
     * @return mixed
     */
    public function getRepository()
    {
        return $this->repository;
    }

    /**
     * Return the current repository's class
     * @return mixed
     */
    public function getClass()
    {
        return $this->class;
    }
}
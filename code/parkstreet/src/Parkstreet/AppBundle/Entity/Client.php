<?php

namespace Parkstreet\AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table(name="Clients")
 * @ORM\Entity(repositoryClass="Parkstreet\AppBundle\Entity\Repository\ClientRepository")
 */
class Client
{
    /**
     * @var string
     *
     * @ORM\Column(name="client_id", type="string", length=36, precision=0, scale=0, nullable=false, unique=true)
     * @ORM\Id
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="client_name", type="string", length=200, precision=0, scale=0, nullable=false, unique=false)
     */
    private $name;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="Product", mappedBy="client")
     */
    private $products;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="Invoice", mappedBy="client")
     */
    private $invoices;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->products = new ArrayCollection();
        $this->invoices = new ArrayCollection();
    }

    /**
     * Set id
     *
     * @param string $id
     * @return Client
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return string 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Client
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Add products
     *
     * @param \Parkstreet\AppBundle\Entity\Product $products
     * @return Client
     */
    public function addProduct(Product $products)
    {
        $this->products[] = $products;

        return $this;
    }

    /**
     * Remove product
     *
     * @param \Parkstreet\AppBundle\Entity\Product $product
     */
    public function removeProduct(Product $product)
    {
        $this->products->removeElement($product);
    }

    /**
     * Get products
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * Add invoices
     *
     * @param \Parkstreet\AppBundle\Entity\Invoice $invoice
     * @return Client
     */
    public function addInvoice(Invoice $invoice)
    {
        $this->invoices[] = $invoice;

        return $this;
    }

    /**
     * Remove invoices
     *
     * @param \Parkstreet\AppBundle\Entity\Invoice $invoice
     */
    public function removeInvoice(Invoice $invoice)
    {
        $this->invoices->removeElement($invoice);
    }

    /**
     * Get invoices
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getInvoices()
    {
        return $this->invoices;
    }
}

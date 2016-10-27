<?php

namespace Parkstreet\AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 *
 * @ORM\Table(name="Products")
 * @ORM\Entity(repositoryClass="Parkstreet\AppBundle\Entity\Repository\ProductRepository")
 */
class Product
{
    /**
     * @var string
     *
     * @ORM\Column(name="product_id", type="string", length=70, precision=0, scale=0, nullable=false, unique=true)
     * @ORM\Id
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="product_description", type="string", length=252, precision=0, scale=0, nullable=false, unique=false)
     */
    private $description;

    /**
     * @var \Parkstreet\AppBundle\Entity\Client
     *
     * @ORM\ManyToOne(targetEntity="Client", inversedBy="products")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="client_id", referencedColumnName="client_id", nullable=true)
     * })
     */
    private $client;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Invoice", inversedBy="products")
     * @ORM\JoinTable(name="InvoiceLineItems",
     *   joinColumns={
     *     @ORM\JoinColumn(name="product_id", referencedColumnName="product_id", nullable=true)
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="invoice_num", referencedColumnName="invoice_num", nullable=true)
     *   }
     * )
     */
    private $invoices;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="InvoiceLineItems", mappedBy="product")
     */
    private $invoiceLineItems;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->invoices = new ArrayCollection();
        $this->invoiceLineItems = new ArrayCollection();
    }


    /**
     * Set id
     *
     * @param string $id
     * @return Product
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
     * Set description
     *
     * @param string $description
     * @return Product
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set client
     *
     * @param \Parkstreet\AppBundle\Entity\Client $client
     * @return Product
     */
    public function setClient(\Parkstreet\AppBundle\Entity\Client $client = null)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \Parkstreet\AppBundle\Entity\Client 
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Add invoices
     *
     * @param \Parkstreet\AppBundle\Entity\Invoice $invoices
     * @return Product
     */
    public function addInvoice(\Parkstreet\AppBundle\Entity\Invoice $invoices)
    {
        $this->invoices[] = $invoices;

        return $this;
    }

    /**
     * Remove invoices
     *
     * @param \Parkstreet\AppBundle\Entity\Invoice $invoices
     */
    public function removeInvoice(\Parkstreet\AppBundle\Entity\Invoice $invoices)
    {
        $this->invoices->removeElement($invoices);
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

    /**
     * Add invoiceLineItems
     *
     * @param \Parkstreet\AppBundle\Entity\InvoiceLineItems $invoiceLineItems
     * @return Product
     */
    public function addInvoiceLineItem(\Parkstreet\AppBundle\Entity\InvoiceLineItems $invoiceLineItems)
    {
        $this->invoiceLineItems[] = $invoiceLineItems;

        return $this;
    }

    /**
     * Remove invoiceLineItems
     *
     * @param \Parkstreet\AppBundle\Entity\InvoiceLineItems $invoiceLineItems
     */
    public function removeInvoiceLineItem(\Parkstreet\AppBundle\Entity\InvoiceLineItems $invoiceLineItems)
    {
        $this->invoiceLineItems->removeElement($invoiceLineItems);
    }

    /**
     * Get invoiceLineItems
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getInvoiceLineItems()
    {
        return $this->invoiceLineItems;
    }
}

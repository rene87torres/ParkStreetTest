<?php

namespace Parkstreet\AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Invoice
 *
 * @ORM\Table(name="Invoices")
 * @ORM\Entity(repositoryClass="Parkstreet\AppBundle\Entity\Repository\InvoiceRepository")
 */
class Invoice
{
    /**
     * @var string
     *
     * @ORM\Column(name="invoice_num", type="string", length=11, nullable=false, unique=true)
     * @ORM\Id
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="invoice_date", type="string", nullable=false)
     */
    private $date;

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
     * @ORM\ManyToMany(targetEntity="Product", mappedBy="invoices")
     */
    private $products;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="InvoiceLineItems", mappedBy="invoice")
     */
    private $invoiceLineItems;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->products = new ArrayCollection();
        $this->invoiceLineItems = new ArrayCollection();
    }

    /**
     * Set id
     *
     * @param string $id
     * @return Invoice
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
     * Set date
     *
     * @param \DateTime $date
     * @return Invoice
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set client
     *
     * @param \Parkstreet\AppBundle\Entity\Client $client
     * @return Invoice
     */
    public function setClient(Client $client = null)
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
     * Add products
     *
     * @param \Parkstreet\AppBundle\Entity\Product $product
     * @return Invoice
     */
    public function addProduct(Product $product)
    {
        $this->products[] = $product;

        return $this;
    }

    /**
     * Remove products
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
     * Add invoiceLineItems
     *
     * @param \Parkstreet\AppBundle\Entity\InvoiceLineItems $invoiceLineItem
     * @return Invoice
     */
    public function addInvoiceLineItem(InvoiceLineItems $invoiceLineItem)
    {
        $this->invoiceLineItems[] = $invoiceLineItem;

        return $this;
    }

    /**
     * Remove invoiceLineItems
     *
     * @param \Parkstreet\AppBundle\Entity\InvoiceLineItems $invoiceLineItem
     */
    public function removeInvoiceLineItem(InvoiceLineItems $invoiceLineItem)
    {
        $this->invoiceLineItems->removeElement($invoiceLineItem);
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

<?php

namespace Parkstreet\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InvoiceLineItems
 *
 * @ORM\Table(name="InvoiceLineItems")
 * @ORM\Entity(repositoryClass="Parkstreet\AppBundle\Entity\Repository\InvoiceLineItemsRepository")
 */
class InvoiceLineItems
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @var string
     *
     * @ORM\Column(name="qty", type="decimal", precision=0, scale=2, nullable=false, unique=false)
     */
    private $qty;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="decimal", precision=0, scale=2, nullable=false, unique=false)
     */
    private $price;

    /**
     * @var \Parkstreet\AppBundle\Entity\Invoice
     *
     * @ORM\ManyToOne(targetEntity="Invoice")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="invoice_num", referencedColumnName="invoice_num", nullable=true)
     * })
     */
    private $invoice;

    /**
     * @var \Parkstreet\AppBundle\Entity\Product
     *
     * @ORM\ManyToOne(targetEntity="Product")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="product_id", referencedColumnName="product_id", nullable=true)
     * })
     */
    private $product;

    /**
     * Set qty
     *
     * @param string $qty
     * @return InvoiceLineItems
     */
    public function setQty($qty)
    {
        $this->qty = $qty;

        return $this;
    }

    /**
     * Get qty
     *
     * @return string 
     */
    public function getQty()
    {
        return $this->qty;
    }

    /**
     * Set price
     *
     * @param string $price
     * @return InvoiceLineItems
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set invoice
     *
     * @param \Parkstreet\AppBundle\Entity\Invoice $invoice
     * @return InvoiceLineItems
     */
    public function setInvoice(Invoice $invoice = null)
    {
        $this->invoice = $invoice;

        return $this;
    }

    /**
     * Get invoice
     *
     * @return \Parkstreet\AppBundle\Entity\Invoice 
     */
    public function getInvoice()
    {
        return $this->invoice;
    }

    /**
     * Set product
     *
     * @param \Parkstreet\AppBundle\Entity\Product $product
     * @return InvoiceLineItems
     */
    public function setProduct(Product $product = null)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     * @return \Parkstreet\AppBundle\Entity\Product 
     */
    public function getProduct()
    {
        return $this->product;
    }
}

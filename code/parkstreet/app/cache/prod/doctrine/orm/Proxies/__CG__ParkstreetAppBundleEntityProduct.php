<?php

namespace Proxies\__CG__\Parkstreet\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Product extends \Parkstreet\AppBundle\Entity\Product implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'Parkstreet\\AppBundle\\Entity\\Product' . "\0" . 'id', '' . "\0" . 'Parkstreet\\AppBundle\\Entity\\Product' . "\0" . 'description', '' . "\0" . 'Parkstreet\\AppBundle\\Entity\\Product' . "\0" . 'client', '' . "\0" . 'Parkstreet\\AppBundle\\Entity\\Product' . "\0" . 'invoices', '' . "\0" . 'Parkstreet\\AppBundle\\Entity\\Product' . "\0" . 'invoiceLineItems');
        }

        return array('__isInitialized__', '' . "\0" . 'Parkstreet\\AppBundle\\Entity\\Product' . "\0" . 'id', '' . "\0" . 'Parkstreet\\AppBundle\\Entity\\Product' . "\0" . 'description', '' . "\0" . 'Parkstreet\\AppBundle\\Entity\\Product' . "\0" . 'client', '' . "\0" . 'Parkstreet\\AppBundle\\Entity\\Product' . "\0" . 'invoices', '' . "\0" . 'Parkstreet\\AppBundle\\Entity\\Product' . "\0" . 'invoiceLineItems');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Product $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function setId($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', array($id));

        return parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', array($description));

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', array());

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setClient(\Parkstreet\AppBundle\Entity\Client $client = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClient', array($client));

        return parent::setClient($client);
    }

    /**
     * {@inheritDoc}
     */
    public function getClient()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClient', array());

        return parent::getClient();
    }

    /**
     * {@inheritDoc}
     */
    public function addInvoice(\Parkstreet\AppBundle\Entity\Invoice $invoices)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addInvoice', array($invoices));

        return parent::addInvoice($invoices);
    }

    /**
     * {@inheritDoc}
     */
    public function removeInvoice(\Parkstreet\AppBundle\Entity\Invoice $invoices)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeInvoice', array($invoices));

        return parent::removeInvoice($invoices);
    }

    /**
     * {@inheritDoc}
     */
    public function getInvoices()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInvoices', array());

        return parent::getInvoices();
    }

    /**
     * {@inheritDoc}
     */
    public function addInvoiceLineItem(\Parkstreet\AppBundle\Entity\InvoiceLineItems $invoiceLineItems)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addInvoiceLineItem', array($invoiceLineItems));

        return parent::addInvoiceLineItem($invoiceLineItems);
    }

    /**
     * {@inheritDoc}
     */
    public function removeInvoiceLineItem(\Parkstreet\AppBundle\Entity\InvoiceLineItems $invoiceLineItems)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeInvoiceLineItem', array($invoiceLineItems));

        return parent::removeInvoiceLineItem($invoiceLineItems);
    }

    /**
     * {@inheritDoc}
     */
    public function getInvoiceLineItems()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInvoiceLineItems', array());

        return parent::getInvoiceLineItems();
    }

}

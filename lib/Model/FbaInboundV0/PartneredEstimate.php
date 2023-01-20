<?php
/**
 * PartneredEstimate
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Fulfillment Inbound
 *
 * The Selling Partner API for Fulfillment Inbound lets you create applications that create and update inbound shipments of inventory to Amazon's fulfillment network.
 *
 * The version of the OpenAPI document: v0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\FbaInboundV0;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * PartneredEstimate Class Doc Comment
 *
 * @category Class
 * @description The estimated shipping cost for a shipment using an Amazon-partnered carrier.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class PartneredEstimate extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PartneredEstimate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amount' => '\SellingPartnerApi\Model\FbaInboundV0\Amount',
        'confirm_deadline' => 'string',
        'void_deadline' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'amount' => null,
        'confirm_deadline' => null,
        'void_deadline' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'amount' => 'Amount',
        'confirm_deadline' => 'ConfirmDeadline',
        'void_deadline' => 'VoidDeadline'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'confirm_deadline' => 'setConfirmDeadline',
        'void_deadline' => 'setVoidDeadline'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'confirm_deadline' => 'getConfirmDeadline',
        'void_deadline' => 'getVoidDeadline'
    ];


    
    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['confirm_deadline'] = $data['confirm_deadline'] ?? null;
        $this->container['void_deadline'] = $data['void_deadline'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets amount
     *
     * @return \SellingPartnerApi\Model\FbaInboundV0\Amount
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param \SellingPartnerApi\Model\FbaInboundV0\Amount $amount amount
     *
     * @return self
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }
    /**
     * Gets confirm_deadline
     *
     * @return string|null
     */
    public function getConfirmDeadline()
    {
        return $this->container['confirm_deadline'];
    }

    /**
     * Sets confirm_deadline
     *
     * @param string|null $confirm_deadline A datetime string in ISO 8601 format
     *
     * @return self
     */
    public function setConfirmDeadline($confirm_deadline)
    {
        $this->container['confirm_deadline'] = $confirm_deadline;

        return $this;
    }
    /**
     * Gets void_deadline
     *
     * @return string|null
     */
    public function getVoidDeadline()
    {
        return $this->container['void_deadline'];
    }

    /**
     * Sets void_deadline
     *
     * @param string|null $void_deadline A datetime string in ISO 8601 format
     *
     * @return self
     */
    public function setVoidDeadline($void_deadline)
    {
        $this->container['void_deadline'] = $void_deadline;

        return $this;
    }
}



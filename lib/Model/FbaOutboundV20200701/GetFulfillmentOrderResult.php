<?php
/**
 * GetFulfillmentOrderResult
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner APIs for Fulfillment Outbound
 *
 * The Selling Partner API for Fulfillment Outbound lets you create applications that help a seller fulfill Multi-Channel Fulfillment orders using their inventory in Amazon's fulfillment network. You can get information on both potential and existing fulfillment orders.
 *
 * The version of the OpenAPI document: 2020-07-01
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\FbaOutboundV20200701;
use ArrayAccess;
use SellingPartnerApi\Model\BaseModel;
use SellingPartnerApi\Model\ModelInterface;
use SellingPartnerApi\ObjectSerializer;

/**
 * GetFulfillmentOrderResult Class Doc Comment
 *
 * @category Class
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class GetFulfillmentOrderResult extends BaseModel implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetFulfillmentOrderResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'fulfillment_order' => '\SellingPartnerApi\Model\FbaOutboundV20200701\FulfillmentOrder',
        'fulfillment_order_items' => '\SellingPartnerApi\Model\FbaOutboundV20200701\FulfillmentOrderItem[]',
        'fulfillment_shipments' => '\SellingPartnerApi\Model\FbaOutboundV20200701\FulfillmentShipment[]',
        'return_items' => '\SellingPartnerApi\Model\FbaOutboundV20200701\ReturnItem[]',
        'return_authorizations' => '\SellingPartnerApi\Model\FbaOutboundV20200701\ReturnAuthorization[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'fulfillment_order' => null,
        'fulfillment_order_items' => null,
        'fulfillment_shipments' => null,
        'return_items' => null,
        'return_authorizations' => null
    ];



    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'fulfillment_order' => 'fulfillmentOrder',
        'fulfillment_order_items' => 'fulfillmentOrderItems',
        'fulfillment_shipments' => 'fulfillmentShipments',
        'return_items' => 'returnItems',
        'return_authorizations' => 'returnAuthorizations'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fulfillment_order' => 'setFulfillmentOrder',
        'fulfillment_order_items' => 'setFulfillmentOrderItems',
        'fulfillment_shipments' => 'setFulfillmentShipments',
        'return_items' => 'setReturnItems',
        'return_authorizations' => 'setReturnAuthorizations'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fulfillment_order' => 'getFulfillmentOrder',
        'fulfillment_order_items' => 'getFulfillmentOrderItems',
        'fulfillment_shipments' => 'getFulfillmentShipments',
        'return_items' => 'getReturnItems',
        'return_authorizations' => 'getReturnAuthorizations'
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
        $this->container['fulfillment_order'] = $data['fulfillment_order'] ?? null;
        $this->container['fulfillment_order_items'] = $data['fulfillment_order_items'] ?? null;
        $this->container['fulfillment_shipments'] = $data['fulfillment_shipments'] ?? null;
        $this->container['return_items'] = $data['return_items'] ?? null;
        $this->container['return_authorizations'] = $data['return_authorizations'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['fulfillment_order'] === null) {
            $invalidProperties[] = "'fulfillment_order' can't be null";
        }
        if ($this->container['fulfillment_order_items'] === null) {
            $invalidProperties[] = "'fulfillment_order_items' can't be null";
        }
        if ($this->container['return_items'] === null) {
            $invalidProperties[] = "'return_items' can't be null";
        }
        if ($this->container['return_authorizations'] === null) {
            $invalidProperties[] = "'return_authorizations' can't be null";
        }
        return $invalidProperties;
    }


    /**
     * Gets fulfillment_order
     *
     * @return \SellingPartnerApi\Model\FbaOutboundV20200701\FulfillmentOrder
     */
    public function getFulfillmentOrder()
    {
        return $this->container['fulfillment_order'];
    }

    /**
     * Sets fulfillment_order
     *
     * @param \SellingPartnerApi\Model\FbaOutboundV20200701\FulfillmentOrder $fulfillment_order fulfillment_order
     *
     * @return self
     */
    public function setFulfillmentOrder($fulfillment_order)
    {
        $this->container['fulfillment_order'] = $fulfillment_order;

        return $this;
    }
    /**
     * Gets fulfillment_order_items
     *
     * @return \SellingPartnerApi\Model\FbaOutboundV20200701\FulfillmentOrderItem[]
     */
    public function getFulfillmentOrderItems()
    {
        return $this->container['fulfillment_order_items'];
    }

    /**
     * Sets fulfillment_order_items
     *
     * @param \SellingPartnerApi\Model\FbaOutboundV20200701\FulfillmentOrderItem[] $fulfillment_order_items An array of fulfillment order item information.
     *
     * @return self
     */
    public function setFulfillmentOrderItems($fulfillment_order_items)
    {
        $this->container['fulfillment_order_items'] = $fulfillment_order_items;

        return $this;
    }
    /**
     * Gets fulfillment_shipments
     *
     * @return \SellingPartnerApi\Model\FbaOutboundV20200701\FulfillmentShipment[]|null
     */
    public function getFulfillmentShipments()
    {
        return $this->container['fulfillment_shipments'];
    }

    /**
     * Sets fulfillment_shipments
     *
     * @param \SellingPartnerApi\Model\FbaOutboundV20200701\FulfillmentShipment[]|null $fulfillment_shipments An array of fulfillment shipment information.
     *
     * @return self
     */
    public function setFulfillmentShipments($fulfillment_shipments)
    {
        $this->container['fulfillment_shipments'] = $fulfillment_shipments;

        return $this;
    }
    /**
     * Gets return_items
     *
     * @return \SellingPartnerApi\Model\FbaOutboundV20200701\ReturnItem[]
     */
    public function getReturnItems()
    {
        return $this->container['return_items'];
    }

    /**
     * Sets return_items
     *
     * @param \SellingPartnerApi\Model\FbaOutboundV20200701\ReturnItem[] $return_items An array of items that Amazon accepted for return. Returns empty if no items were accepted for return.
     *
     * @return self
     */
    public function setReturnItems($return_items)
    {
        $this->container['return_items'] = $return_items;

        return $this;
    }
    /**
     * Gets return_authorizations
     *
     * @return \SellingPartnerApi\Model\FbaOutboundV20200701\ReturnAuthorization[]
     */
    public function getReturnAuthorizations()
    {
        return $this->container['return_authorizations'];
    }

    /**
     * Sets return_authorizations
     *
     * @param \SellingPartnerApi\Model\FbaOutboundV20200701\ReturnAuthorization[] $return_authorizations An array of return authorization information.
     *
     * @return self
     */
    public function setReturnAuthorizations($return_authorizations)
    {
        $this->container['return_authorizations'] = $return_authorizations;

        return $this;
    }
}



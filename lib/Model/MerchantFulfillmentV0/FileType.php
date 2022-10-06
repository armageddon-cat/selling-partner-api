<?php
/**
 * FileType
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Merchant Fulfillment
 *
 * The Selling Partner API for Merchant Fulfillment helps you build applications that let sellers purchase shipping for non-Prime and Prime orders using Amazon's Buy Shipping Services.
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

namespace SellingPartnerApi\Model\MerchantFulfillmentV0;
use \SellingPartnerApi\ObjectSerializer;
use \SellingPartnerApi\Model\ModelInterface;

/**
 * FileType Class Doc Comment
 *
 * @category Class
 * @description The file type for a label.
 * @package  SellingPartnerApi
 * @group 
 */
class FileType
{
    public $value;

    /**
     * Possible values of this enum
     */
    const APPLICATION_PDF = 'application/pdf';
    const APPLICATION_ZPL = 'application/zpl';
    const IMAGE_PNG = 'image/png';
    const EMPTY = '';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        $baseVals = [
            self::APPLICATION_PDF,
            self::APPLICATION_ZPL,
            self::IMAGE_PNG,
            self::EMPTY,
        ];
        // This is necessary because Amazon does not consistently capitalize their
        // enum values, so we do case-insensitive enum value validation in ObjectSerializer
        $ucVals = array_map(fn ($val) => strtoupper($val), $baseVals);
        return array_merge($baseVals, $ucVals);
    }

    public function __construct($value)
    {
        if (is_null($value) || !in_array($value, self::getAllowableEnumValues())) {
            throw new \InvalidArgumentException(sprintf("Invalid value for enum 'FileType', must be one of '%s'", implode("', '", self::getAllowableEnumValues())));
        }

        $this->value = $value;
    }

    /**
     * Convert the enum value to a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->value;
    }
}



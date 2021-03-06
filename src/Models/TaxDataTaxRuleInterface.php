<?php
/*
 * MagentoCommunityLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace MagentoCommunityLib\Models;

use JsonSerializable;

/**
 *Tax rule interface.
 */
class TaxDataTaxRuleInterface implements JsonSerializable
{
    /**
     * Tax rule code
     * @required
     * @var string $code public property
     */
    public $code;

    /**
     * Priority
     * @required
     * @var integer $priority public property
     */
    public $priority;

    /**
     * Sort order.
     * @required
     * @var integer $position public property
     */
    public $position;

    /**
     * Customer tax class id
     * @required
     * @maps customer_tax_class_ids
     * @var array $customerTaxClassIds public property
     */
    public $customerTaxClassIds;

    /**
     * Product tax class id
     * @required
     * @maps product_tax_class_ids
     * @var array $productTaxClassIds public property
     */
    public $productTaxClassIds;

    /**
     * Tax rate ids
     * @required
     * @maps tax_rate_ids
     * @var array $taxRateIds public property
     */
    public $taxRateIds;

    /**
     * Id
     * @var integer|null $id public property
     */
    public $id;

    /**
     * Calculate subtotal.
     * @maps calculate_subtotal
     * @var bool|null $calculateSubtotal public property
     */
    public $calculateSubtotal;

    /**
     * ExtensionInterface class for @see \Magento\Tax\Api\Data\TaxRuleInterface
     * @maps extension_attributes
     * @var object|null $extensionAttributes public property
     */
    public $extensionAttributes;

    /**
     * Constructor to set initial or default values of member properties
     * @param string  $code                Initialization value for $this->code
     * @param integer $priority            Initialization value for $this->priority
     * @param integer $position            Initialization value for $this->position
     * @param array   $customerTaxClassIds Initialization value for $this->customerTaxClassIds
     * @param array   $productTaxClassIds  Initialization value for $this->productTaxClassIds
     * @param array   $taxRateIds          Initialization value for $this->taxRateIds
     * @param integer $id                  Initialization value for $this->id
     * @param bool    $calculateSubtotal   Initialization value for $this->calculateSubtotal
     * @param object  $extensionAttributes Initialization value for $this->extensionAttributes
     */
    public function __construct()
    {
        if (9 == func_num_args()) {
            $this->code                = func_get_arg(0);
            $this->priority            = func_get_arg(1);
            $this->position            = func_get_arg(2);
            $this->customerTaxClassIds = func_get_arg(3);
            $this->productTaxClassIds  = func_get_arg(4);
            $this->taxRateIds          = func_get_arg(5);
            $this->id                  = func_get_arg(6);
            $this->calculateSubtotal   = func_get_arg(7);
            $this->extensionAttributes = func_get_arg(8);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['code']                   = $this->code;
        $json['priority']               = $this->priority;
        $json['position']               = $this->position;
        $json['customer_tax_class_ids'] = $this->customerTaxClassIds;
        $json['product_tax_class_ids']  = $this->productTaxClassIds;
        $json['tax_rate_ids']           = $this->taxRateIds;
        $json['id']                     = $this->id;
        $json['calculate_subtotal']     = $this->calculateSubtotal;
        $json['extension_attributes']   = $this->extensionAttributes;

        return $json;
    }
}

<?php
/*
 * MagentoCommunityLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace MagentoCommunityLib\Models;

use JsonSerializable;

/**
 *Customer address interface.
 */
class CustomerDataAddressInterface implements JsonSerializable
{
    /**
     * ID
     * @var integer|null $id public property
     */
    public $id;

    /**
     * Customer ID
     * @maps customer_id
     * @var integer|null $customerId public property
     */
    public $customerId;

    /**
     * Customer address region interface.
     * @var \MagentoCommunityLib\Models\CustomerDataRegionInterface|null $region public property
     */
    public $region;

    /**
     * Region ID
     * @maps region_id
     * @var integer|null $regionId public property
     */
    public $regionId;

    /**
     * Country code in ISO_3166-2 format
     * @maps country_id
     * @var string|null $countryId public property
     */
    public $countryId;

    /**
     * Street
     * @var array|null $street public property
     */
    public $street;

    /**
     * Company
     * @var string|null $company public property
     */
    public $company;

    /**
     * Telephone number
     * @var string|null $telephone public property
     */
    public $telephone;

    /**
     * Fax number
     * @var string|null $fax public property
     */
    public $fax;

    /**
     * Postcode
     * @var string|null $postcode public property
     */
    public $postcode;

    /**
     * City name
     * @var string|null $city public property
     */
    public $city;

    /**
     * First name
     * @var string|null $firstname public property
     */
    public $firstname;

    /**
     * Last name
     * @var string|null $lastname public property
     */
    public $lastname;

    /**
     * Middle name
     * @var string|null $middlename public property
     */
    public $middlename;

    /**
     * Prefix
     * @var string|null $prefix public property
     */
    public $prefix;

    /**
     * Suffix
     * @var string|null $suffix public property
     */
    public $suffix;

    /**
     * Vat id
     * @maps vat_id
     * @var string|null $vatId public property
     */
    public $vatId;

    /**
     * If this address is default shipping address.
     * @maps default_shipping
     * @var bool|null $defaultShipping public property
     */
    public $defaultShipping;

    /**
     * If this address is default billing address
     * @maps default_billing
     * @var bool|null $defaultBilling public property
     */
    public $defaultBilling;

    /**
     * ExtensionInterface class for @see \Magento\Customer\Api\Data\AddressInterface
     * @maps extension_attributes
     * @var object|null $extensionAttributes public property
     */
    public $extensionAttributes;

    /**
     * Custom attributes values.
     * @maps custom_attributes
     * @var \MagentoCommunityLib\Models\FrameworkAttributeInterface[]|null $customAttributes public property
     */
    public $customAttributes;

    /**
     * Constructor to set initial or default values of member properties
     * @param integer                     $id                  Initialization value for $this->id
     * @param integer                     $customerId          Initialization value for $this->customerId
     * @param CustomerDataRegionInterface $region              Initialization value for $this->region
     * @param integer                     $regionId            Initialization value for $this->regionId
     * @param string                      $countryId           Initialization value for $this->countryId
     * @param array                       $street              Initialization value for $this->street
     * @param string                      $company             Initialization value for $this->company
     * @param string                      $telephone           Initialization value for $this->telephone
     * @param string                      $fax                 Initialization value for $this->fax
     * @param string                      $postcode            Initialization value for $this->postcode
     * @param string                      $city                Initialization value for $this->city
     * @param string                      $firstname           Initialization value for $this->firstname
     * @param string                      $lastname            Initialization value for $this->lastname
     * @param string                      $middlename          Initialization value for $this->middlename
     * @param string                      $prefix              Initialization value for $this->prefix
     * @param string                      $suffix              Initialization value for $this->suffix
     * @param string                      $vatId               Initialization value for $this->vatId
     * @param bool                        $defaultShipping     Initialization value for $this->defaultShipping
     * @param bool                        $defaultBilling      Initialization value for $this->defaultBilling
     * @param object                      $extensionAttributes Initialization value for $this->extensionAttributes
     * @param array                       $customAttributes    Initialization value for $this->customAttributes
     */
    public function __construct()
    {
        if (21 == func_num_args()) {
            $this->id                  = func_get_arg(0);
            $this->customerId          = func_get_arg(1);
            $this->region              = func_get_arg(2);
            $this->regionId            = func_get_arg(3);
            $this->countryId           = func_get_arg(4);
            $this->street              = func_get_arg(5);
            $this->company             = func_get_arg(6);
            $this->telephone           = func_get_arg(7);
            $this->fax                 = func_get_arg(8);
            $this->postcode            = func_get_arg(9);
            $this->city                = func_get_arg(10);
            $this->firstname           = func_get_arg(11);
            $this->lastname            = func_get_arg(12);
            $this->middlename          = func_get_arg(13);
            $this->prefix              = func_get_arg(14);
            $this->suffix              = func_get_arg(15);
            $this->vatId               = func_get_arg(16);
            $this->defaultShipping     = func_get_arg(17);
            $this->defaultBilling      = func_get_arg(18);
            $this->extensionAttributes = func_get_arg(19);
            $this->customAttributes    = func_get_arg(20);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['id']                   = $this->id;
        $json['customer_id']          = $this->customerId;
        $json['region']               = $this->region;
        $json['region_id']            = $this->regionId;
        $json['country_id']           = $this->countryId;
        $json['street']               = $this->street;
        $json['company']              = $this->company;
        $json['telephone']            = $this->telephone;
        $json['fax']                  = $this->fax;
        $json['postcode']             = $this->postcode;
        $json['city']                 = $this->city;
        $json['firstname']            = $this->firstname;
        $json['lastname']             = $this->lastname;
        $json['middlename']           = $this->middlename;
        $json['prefix']               = $this->prefix;
        $json['suffix']               = $this->suffix;
        $json['vat_id']               = $this->vatId;
        $json['default_shipping']     = $this->defaultShipping;
        $json['default_billing']      = $this->defaultBilling;
        $json['extension_attributes'] = $this->extensionAttributes;
        $json['custom_attributes']    = $this->customAttributes;

        return $json;
    }
}

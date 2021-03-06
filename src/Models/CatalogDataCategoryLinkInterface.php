<?php
/*
 * MagentoCommunityLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace MagentoCommunityLib\Models;

use JsonSerializable;

/**
 * @todo Write general description for this model
 */
class CatalogDataCategoryLinkInterface implements JsonSerializable
{
    /**
     * Category id
     * @required
     * @maps category_id
     * @var string $categoryId public property
     */
    public $categoryId;

    /**
     * @todo Write general description for this property
     * @var integer|null $position public property
     */
    public $position;

    /**
     * ExtensionInterface class for @see \Magento\Catalog\Api\Data\CategoryLinkInterface
     * @maps extension_attributes
     * @var object|null $extensionAttributes public property
     */
    public $extensionAttributes;

    /**
     * Constructor to set initial or default values of member properties
     * @param string  $categoryId          Initialization value for $this->categoryId
     * @param integer $position            Initialization value for $this->position
     * @param object  $extensionAttributes Initialization value for $this->extensionAttributes
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->categoryId          = func_get_arg(0);
            $this->position            = func_get_arg(1);
            $this->extensionAttributes = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['category_id']          = $this->categoryId;
        $json['position']             = $this->position;
        $json['extension_attributes'] = $this->extensionAttributes;

        return $json;
    }
}

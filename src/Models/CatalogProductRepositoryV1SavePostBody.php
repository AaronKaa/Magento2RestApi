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
class CatalogProductRepositoryV1SavePostBody implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @var \MagentoCommunityLib\Models\CatalogDataProductInterface $product public property
     */
    public $product;

    /**
     * @todo Write general description for this property
     * @var bool|null $saveOptions public property
     */
    public $saveOptions;

    /**
     * Constructor to set initial or default values of member properties
     * @param CatalogDataProductInterface $product     Initialization value for $this->product
     * @param bool                        $saveOptions Initialization value for $this->saveOptions
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->product     = func_get_arg(0);
            $this->saveOptions = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['product']     = $this->product;
        $json['saveOptions'] = $this->saveOptions;

        return $json;
    }
}
<?php
/*
 * MagentoCommunityLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace MagentoCommunityLib\Models;

use JsonSerializable;

/**
 *Created from:
 */
class EavDataAttributeOptionInterface implements JsonSerializable
{
    /**
     * Option label
     * @required
     * @var string $label public property
     */
    public $label;

    /**
     * Option value
     * @required
     * @var string $value public property
     */
    public $value;

    /**
     * Option order
     * @maps sort_order
     * @var integer|null $sortOrder public property
     */
    public $sortOrder;

    /**
     * Default
     * @maps is_default
     * @var bool|null $isDefault public property
     */
    public $isDefault;

    /**
     * Option label for store scopes
     * @maps store_labels
     * @var \MagentoCommunityLib\Models\EavDataAttributeOptionLabelInterface[]|null $storeLabels public property
     */
    public $storeLabels;

    /**
     * Constructor to set initial or default values of member properties
     * @param string  $label       Initialization value for $this->label
     * @param string  $value       Initialization value for $this->value
     * @param integer $sortOrder   Initialization value for $this->sortOrder
     * @param bool    $isDefault   Initialization value for $this->isDefault
     * @param array   $storeLabels Initialization value for $this->storeLabels
     */
    public function __construct()
    {
        if (5 == func_num_args()) {
            $this->label       = func_get_arg(0);
            $this->value       = func_get_arg(1);
            $this->sortOrder   = func_get_arg(2);
            $this->isDefault   = func_get_arg(3);
            $this->storeLabels = func_get_arg(4);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['label']        = $this->label;
        $json['value']        = $this->value;
        $json['sort_order']   = $this->sortOrder;
        $json['is_default']   = $this->isDefault;
        $json['store_labels'] = $this->storeLabels;

        return $json;
    }
}

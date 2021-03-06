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
class SalesDataShipmentExtensionInterface implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @maps ext_shipment_id
     * @var string|null $extShipmentId public property
     */
    public $extShipmentId;

    /**
     * @todo Write general description for this property
     * @maps ext_location_id
     * @var string|null $extLocationId public property
     */
    public $extLocationId;

    /**
     * @todo Write general description for this property
     * @maps ext_tracking_url
     * @var string|null $extTrackingUrl public property
     */
    public $extTrackingUrl;

    /**
     * @todo Write general description for this property
     * @maps ext_tracking_reference
     * @var string|null $extTrackingReference public property
     */
    public $extTrackingReference;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $extShipmentId        Initialization value for $this->extShipmentId
     * @param string $extLocationId        Initialization value for $this->extLocationId
     * @param string $extTrackingUrl       Initialization value for $this->extTrackingUrl
     * @param string $extTrackingReference Initialization value for $this->extTrackingReference
     */
    public function __construct()
    {
        if (4 == func_num_args()) {
            $this->extShipmentId        = func_get_arg(0);
            $this->extLocationId        = func_get_arg(1);
            $this->extTrackingUrl       = func_get_arg(2);
            $this->extTrackingReference = func_get_arg(3);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['ext_shipment_id']        = $this->extShipmentId;
        $json['ext_location_id']        = $this->extLocationId;
        $json['ext_tracking_url']       = $this->extTrackingUrl;
        $json['ext_tracking_reference'] = $this->extTrackingReference;

        return $json;
    }
}

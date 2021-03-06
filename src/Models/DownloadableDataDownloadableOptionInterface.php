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
class DownloadableDataDownloadableOptionInterface implements JsonSerializable
{
    /**
     * The list of downloadable links
     * @required
     * @maps downloadable_links
     * @var array $downloadableLinks public property
     */
    public $downloadableLinks;

    /**
     * Constructor to set initial or default values of member properties
     * @param array $downloadableLinks Initialization value for $this->downloadableLinks
     */
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->downloadableLinks = func_get_arg(0);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['downloadable_links'] = $this->downloadableLinks;

        return $json;
    }
}

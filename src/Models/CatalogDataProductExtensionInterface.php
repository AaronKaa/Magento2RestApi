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
class CatalogDataProductExtensionInterface implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @maps website_ids
     * @var array|null $websiteIds public property
     */
    public $websiteIds;

    /**
     * @todo Write general description for this property
     * @maps category_links
     * @var \MagentoCommunityLib\Models\CatalogDataCategoryLinkInterface[]|null $categoryLinks public property
     */
    public $categoryLinks;

    /**
     * Interface StockItem
     * @maps stock_item
     * @var \MagentoCommunityLib\Models\CatalogInventoryDataStockItemInterface|null $stockItem public property
     */
    public $stockItem;

    /**
     * @todo Write general description for this property
     * @maps bundle_product_options
     * @var \MagentoCommunityLib\Models\BundleDataOptionInterface[]|null $bundleProductOptions public property
     */
    public $bundleProductOptions;

    /**
     * @todo Write general description for this property
     * @maps configurable_product_options
     * @var \MagentoCommunityLib\Models\ConfigurableProductDataOptionInterface[]|null $configurableProductOptions public property
     */
    public $configurableProductOptions;

    /**
     * @todo Write general description for this property
     * @maps configurable_product_links
     * @var array|null $configurableProductLinks public property
     */
    public $configurableProductLinks;

    /**
     * @todo Write general description for this property
     * @maps downloadable_product_links
     * @var \MagentoCommunityLib\Models\DownloadableDataLinkInterface[]|null $downloadableProductLinks public property
     */
    public $downloadableProductLinks;

    /**
     * @todo Write general description for this property
     * @maps downloadable_product_samples
     * @var \MagentoCommunityLib\Models\DownloadableDataSampleInterface[]|null $downloadableProductSamples public property
     */
    public $downloadableProductSamples;

    /**
     * Constructor to set initial or default values of member properties
     * @param array                                  $websiteIds                 Initialization value for $this-
     *                                                                             >websiteIds
     * @param array                                  $categoryLinks              Initialization value for $this-
     *                                                                             >categoryLinks
     * @param CatalogInventoryDataStockItemInterface $stockItem                  Initialization value for $this-
     *                                                                             >stockItem
     * @param array                                  $bundleProductOptions       Initialization value for $this-
     *                                                                             >bundleProductOptions
     * @param array                                  $configurableProductOptions Initialization value for $this-
     *                                                                             >configurableProductOptions
     * @param array                                  $configurableProductLinks   Initialization value for $this-
     *                                                                             >configurableProductLinks
     * @param array                                  $downloadableProductLinks   Initialization value for $this-
     *                                                                             >downloadableProductLinks
     * @param array                                  $downloadableProductSamples Initialization value for $this-
     *                                                                             >downloadableProductSamples
     */
    public function __construct()
    {
        if (8 == func_num_args()) {
            $this->websiteIds                 = func_get_arg(0);
            $this->categoryLinks              = func_get_arg(1);
            $this->stockItem                  = func_get_arg(2);
            $this->bundleProductOptions       = func_get_arg(3);
            $this->configurableProductOptions = func_get_arg(4);
            $this->configurableProductLinks   = func_get_arg(5);
            $this->downloadableProductLinks   = func_get_arg(6);
            $this->downloadableProductSamples = func_get_arg(7);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['website_ids']                  = $this->websiteIds;
        $json['category_links']               = $this->categoryLinks;
        $json['stock_item']                   = $this->stockItem;
        $json['bundle_product_options']       = $this->bundleProductOptions;
        $json['configurable_product_options'] = $this->configurableProductOptions;
        $json['configurable_product_links']   = $this->configurableProductLinks;
        $json['downloadable_product_links']   = $this->downloadableProductLinks;
        $json['downloadable_product_samples'] = $this->downloadableProductSamples;

        return $json;
    }
}

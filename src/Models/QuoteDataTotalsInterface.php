<?php
/*
 * MagentoCommunityLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace MagentoCommunityLib\Models;

use JsonSerializable;

/**
 *Interface TotalsInterface
 */
class QuoteDataTotalsInterface implements JsonSerializable
{
    /**
     * Item weee tax applied amount in quote currency.
     * @required
     * @maps weee_tax_applied_amount
     * @var double $weeeTaxAppliedAmount public property
     */
    public $weeeTaxAppliedAmount;

    /**
     * Dynamically calculated totals
     * @required
     * @maps total_segments
     * @var \MagentoCommunityLib\Models\QuoteDataTotalSegmentInterface[] $totalSegments public property
     */
    public $totalSegments;

    /**
     * Grand total in quote currency
     * @maps grand_total
     * @var double|null $grandTotal public property
     */
    public $grandTotal;

    /**
     * Grand total in base currency
     * @maps base_grand_total
     * @var double|null $baseGrandTotal public property
     */
    public $baseGrandTotal;

    /**
     * Subtotal in quote currency
     * @var double|null $subtotal public property
     */
    public $subtotal;

    /**
     * Subtotal in base currency
     * @maps base_subtotal
     * @var double|null $baseSubtotal public property
     */
    public $baseSubtotal;

    /**
     * Discount amount in quote currency
     * @maps discount_amount
     * @var double|null $discountAmount public property
     */
    public $discountAmount;

    /**
     * Discount amount in base currency
     * @maps base_discount_amount
     * @var double|null $baseDiscountAmount public property
     */
    public $baseDiscountAmount;

    /**
     * Subtotal in quote currency with applied discount
     * @maps subtotal_with_discount
     * @var double|null $subtotalWithDiscount public property
     */
    public $subtotalWithDiscount;

    /**
     * Subtotal in base currency with applied discount
     * @maps base_subtotal_with_discount
     * @var double|null $baseSubtotalWithDiscount public property
     */
    public $baseSubtotalWithDiscount;

    /**
     * Shipping amount in quote currency
     * @maps shipping_amount
     * @var double|null $shippingAmount public property
     */
    public $shippingAmount;

    /**
     * Shipping amount in base currency
     * @maps base_shipping_amount
     * @var double|null $baseShippingAmount public property
     */
    public $baseShippingAmount;

    /**
     * Shipping discount amount in quote currency
     * @maps shipping_discount_amount
     * @var double|null $shippingDiscountAmount public property
     */
    public $shippingDiscountAmount;

    /**
     * Shipping discount amount in base currency
     * @maps base_shipping_discount_amount
     * @var double|null $baseShippingDiscountAmount public property
     */
    public $baseShippingDiscountAmount;

    /**
     * Tax amount in quote currency
     * @maps tax_amount
     * @var double|null $taxAmount public property
     */
    public $taxAmount;

    /**
     * Tax amount in base currency
     * @maps base_tax_amount
     * @var double|null $baseTaxAmount public property
     */
    public $baseTaxAmount;

    /**
     * Shipping tax amount in quote currency
     * @maps shipping_tax_amount
     * @var double|null $shippingTaxAmount public property
     */
    public $shippingTaxAmount;

    /**
     * Shipping tax amount in base currency
     * @maps base_shipping_tax_amount
     * @var double|null $baseShippingTaxAmount public property
     */
    public $baseShippingTaxAmount;

    /**
     * Subtotal including tax in quote currency
     * @maps subtotal_incl_tax
     * @var double|null $subtotalInclTax public property
     */
    public $subtotalInclTax;

    /**
     * Subtotal including tax in base currency
     * @maps base_subtotal_incl_tax
     * @var double|null $baseSubtotalInclTax public property
     */
    public $baseSubtotalInclTax;

    /**
     * Shipping including tax in quote currency
     * @maps shipping_incl_tax
     * @var double|null $shippingInclTax public property
     */
    public $shippingInclTax;

    /**
     * Shipping including tax in base currency
     * @maps base_shipping_incl_tax
     * @var double|null $baseShippingInclTax public property
     */
    public $baseShippingInclTax;

    /**
     * Base currency code
     * @maps base_currency_code
     * @var string|null $baseCurrencyCode public property
     */
    public $baseCurrencyCode;

    /**
     * Quote currency code
     * @maps quote_currency_code
     * @var string|null $quoteCurrencyCode public property
     */
    public $quoteCurrencyCode;

    /**
     * Applied coupon code
     * @maps coupon_code
     * @var string|null $couponCode public property
     */
    public $couponCode;

    /**
     * Items qty
     * @maps items_qty
     * @var integer|null $itemsQty public property
     */
    public $itemsQty;

    /**
     * Totals by items
     * @var \MagentoCommunityLib\Models\QuoteDataTotalsItemInterface[]|null $items public property
     */
    public $items;

    /**
     * ExtensionInterface class for @see \Magento\Quote\Api\Data\TotalsInterface
     * @maps extension_attributes
     * @var \MagentoCommunityLib\Models\QuoteDataTotalsExtensionInterface|null $extensionAttributes public property
     */
    public $extensionAttributes;

    /**
     * Constructor to set initial or default values of member properties
     * @param double                            $weeeTaxAppliedAmount       Initialization value for $this-
     *                                                                        >weeeTaxAppliedAmount
     * @param array                             $totalSegments              Initialization value for $this-
     *                                                                        >totalSegments
     * @param double                            $grandTotal                 Initialization value for $this-
     *                                                                        >grandTotal
     * @param double                            $baseGrandTotal             Initialization value for $this-
     *                                                                        >baseGrandTotal
     * @param double                            $subtotal                   Initialization value for $this->subtotal
     * @param double                            $baseSubtotal               Initialization value for $this-
     *                                                                        >baseSubtotal
     * @param double                            $discountAmount             Initialization value for $this-
     *                                                                        >discountAmount
     * @param double                            $baseDiscountAmount         Initialization value for $this-
     *                                                                        >baseDiscountAmount
     * @param double                            $subtotalWithDiscount       Initialization value for $this-
     *                                                                        >subtotalWithDiscount
     * @param double                            $baseSubtotalWithDiscount   Initialization value for $this-
     *                                                                        >baseSubtotalWithDiscount
     * @param double                            $shippingAmount             Initialization value for $this-
     *                                                                        >shippingAmount
     * @param double                            $baseShippingAmount         Initialization value for $this-
     *                                                                        >baseShippingAmount
     * @param double                            $shippingDiscountAmount     Initialization value for $this-
     *                                                                        >shippingDiscountAmount
     * @param double                            $baseShippingDiscountAmount Initialization value for $this-
     *                                                                        >baseShippingDiscountAmount
     * @param double                            $taxAmount                  Initialization value for $this->taxAmount
     * @param double                            $baseTaxAmount              Initialization value for $this-
     *                                                                        >baseTaxAmount
     * @param double                            $shippingTaxAmount          Initialization value for $this-
     *                                                                        >shippingTaxAmount
     * @param double                            $baseShippingTaxAmount      Initialization value for $this-
     *                                                                        >baseShippingTaxAmount
     * @param double                            $subtotalInclTax            Initialization value for $this-
     *                                                                        >subtotalInclTax
     * @param double                            $baseSubtotalInclTax        Initialization value for $this-
     *                                                                        >baseSubtotalInclTax
     * @param double                            $shippingInclTax            Initialization value for $this-
     *                                                                        >shippingInclTax
     * @param double                            $baseShippingInclTax        Initialization value for $this-
     *                                                                        >baseShippingInclTax
     * @param string                            $baseCurrencyCode           Initialization value for $this-
     *                                                                        >baseCurrencyCode
     * @param string                            $quoteCurrencyCode          Initialization value for $this-
     *                                                                        >quoteCurrencyCode
     * @param string                            $couponCode                 Initialization value for $this-
     *                                                                        >couponCode
     * @param integer                           $itemsQty                   Initialization value for $this->itemsQty
     * @param array                             $items                      Initialization value for $this->items
     * @param QuoteDataTotalsExtensionInterface $extensionAttributes        Initialization value for $this-
     *                                                                        >extensionAttributes
     */
    public function __construct()
    {
        if (28 == func_num_args()) {
            $this->weeeTaxAppliedAmount       = func_get_arg(0);
            $this->totalSegments              = func_get_arg(1);
            $this->grandTotal                 = func_get_arg(2);
            $this->baseGrandTotal             = func_get_arg(3);
            $this->subtotal                   = func_get_arg(4);
            $this->baseSubtotal               = func_get_arg(5);
            $this->discountAmount             = func_get_arg(6);
            $this->baseDiscountAmount         = func_get_arg(7);
            $this->subtotalWithDiscount       = func_get_arg(8);
            $this->baseSubtotalWithDiscount   = func_get_arg(9);
            $this->shippingAmount             = func_get_arg(10);
            $this->baseShippingAmount         = func_get_arg(11);
            $this->shippingDiscountAmount     = func_get_arg(12);
            $this->baseShippingDiscountAmount = func_get_arg(13);
            $this->taxAmount                  = func_get_arg(14);
            $this->baseTaxAmount              = func_get_arg(15);
            $this->shippingTaxAmount          = func_get_arg(16);
            $this->baseShippingTaxAmount      = func_get_arg(17);
            $this->subtotalInclTax            = func_get_arg(18);
            $this->baseSubtotalInclTax        = func_get_arg(19);
            $this->shippingInclTax            = func_get_arg(20);
            $this->baseShippingInclTax        = func_get_arg(21);
            $this->baseCurrencyCode           = func_get_arg(22);
            $this->quoteCurrencyCode          = func_get_arg(23);
            $this->couponCode                 = func_get_arg(24);
            $this->itemsQty                   = func_get_arg(25);
            $this->items                      = func_get_arg(26);
            $this->extensionAttributes        = func_get_arg(27);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['weee_tax_applied_amount']       = $this->weeeTaxAppliedAmount;
        $json['total_segments']                = $this->totalSegments;
        $json['grand_total']                   = $this->grandTotal;
        $json['base_grand_total']              = $this->baseGrandTotal;
        $json['subtotal']                      = $this->subtotal;
        $json['base_subtotal']                 = $this->baseSubtotal;
        $json['discount_amount']               = $this->discountAmount;
        $json['base_discount_amount']          = $this->baseDiscountAmount;
        $json['subtotal_with_discount']        = $this->subtotalWithDiscount;
        $json['base_subtotal_with_discount']   = $this->baseSubtotalWithDiscount;
        $json['shipping_amount']               = $this->shippingAmount;
        $json['base_shipping_amount']          = $this->baseShippingAmount;
        $json['shipping_discount_amount']      = $this->shippingDiscountAmount;
        $json['base_shipping_discount_amount'] = $this->baseShippingDiscountAmount;
        $json['tax_amount']                    = $this->taxAmount;
        $json['base_tax_amount']               = $this->baseTaxAmount;
        $json['shipping_tax_amount']           = $this->shippingTaxAmount;
        $json['base_shipping_tax_amount']      = $this->baseShippingTaxAmount;
        $json['subtotal_incl_tax']             = $this->subtotalInclTax;
        $json['base_subtotal_incl_tax']        = $this->baseSubtotalInclTax;
        $json['shipping_incl_tax']             = $this->shippingInclTax;
        $json['base_shipping_incl_tax']        = $this->baseShippingInclTax;
        $json['base_currency_code']            = $this->baseCurrencyCode;
        $json['quote_currency_code']           = $this->quoteCurrencyCode;
        $json['coupon_code']                   = $this->couponCode;
        $json['items_qty']                     = $this->itemsQty;
        $json['items']                         = $this->items;
        $json['extension_attributes']          = $this->extensionAttributes;

        return $json;
    }
}
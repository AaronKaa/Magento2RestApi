<?php
/*
 * MagentoCommunityLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace MagentoCommunityLib\Models;

use JsonSerializable;

/**
 *Order status history interface. An order is a document that a web store issues to a customer.
 * Magento generates a sales order that lists the product items, billing and shipping addresses, and
 * shipping and payment methods. A corresponding external document, known as a purchase order, is
 * emailed to the customer.
 */
class SalesDataOrderStatusHistoryInterface implements JsonSerializable
{
    /**
     * Comment.
     * @required
     * @var string $comment public property
     */
    public $comment;

    /**
     * Is-customer-notified flag value.
     * @required
     * @maps is_customer_notified
     * @var integer $isCustomerNotified public property
     */
    public $isCustomerNotified;

    /**
     * Is-visible-on-storefront flag value.
     * @required
     * @maps is_visible_on_front
     * @var integer $isVisibleOnFront public property
     */
    public $isVisibleOnFront;

    /**
     * Parent ID.
     * @required
     * @maps parent_id
     * @var integer $parentId public property
     */
    public $parentId;

    /**
     * Created-at timestamp.
     * @maps created_at
     * @var string|null $createdAt public property
     */
    public $createdAt;

    /**
     * Order status history ID.
     * @maps entity_id
     * @var integer|null $entityId public property
     */
    public $entityId;

    /**
     * Entity name.
     * @maps entity_name
     * @var string|null $entityName public property
     */
    public $entityName;

    /**
     * Status.
     * @var string|null $status public property
     */
    public $status;

    /**
     * ExtensionInterface class for @see \Magento\Sales\Api\Data\OrderStatusHistoryInterface
     * @maps extension_attributes
     * @var object|null $extensionAttributes public property
     */
    public $extensionAttributes;

    /**
     * Constructor to set initial or default values of member properties
     * @param string  $comment             Initialization value for $this->comment
     * @param integer $isCustomerNotified  Initialization value for $this->isCustomerNotified
     * @param integer $isVisibleOnFront    Initialization value for $this->isVisibleOnFront
     * @param integer $parentId            Initialization value for $this->parentId
     * @param string  $createdAt           Initialization value for $this->createdAt
     * @param integer $entityId            Initialization value for $this->entityId
     * @param string  $entityName          Initialization value for $this->entityName
     * @param string  $status              Initialization value for $this->status
     * @param object  $extensionAttributes Initialization value for $this->extensionAttributes
     */
    public function __construct()
    {
        if (9 == func_num_args()) {
            $this->comment             = func_get_arg(0);
            $this->isCustomerNotified  = func_get_arg(1);
            $this->isVisibleOnFront    = func_get_arg(2);
            $this->parentId            = func_get_arg(3);
            $this->createdAt           = func_get_arg(4);
            $this->entityId            = func_get_arg(5);
            $this->entityName          = func_get_arg(6);
            $this->status              = func_get_arg(7);
            $this->extensionAttributes = func_get_arg(8);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['comment']              = $this->comment;
        $json['is_customer_notified'] = $this->isCustomerNotified;
        $json['is_visible_on_front']  = $this->isVisibleOnFront;
        $json['parent_id']            = $this->parentId;
        $json['created_at']           = $this->createdAt;
        $json['entity_id']            = $this->entityId;
        $json['entity_name']          = $this->entityName;
        $json['status']               = $this->status;
        $json['extension_attributes'] = $this->extensionAttributes;

        return $json;
    }
}

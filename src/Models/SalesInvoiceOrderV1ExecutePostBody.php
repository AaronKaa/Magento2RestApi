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
class SalesInvoiceOrderV1ExecutePostBody implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var bool|null $capture public property
     */
    public $capture;

    /**
     * @todo Write general description for this property
     * @var \MagentoCommunityLib\Models\SalesDataInvoiceItemCreationInterface[]|null $items public property
     */
    public $items;

    /**
     * @todo Write general description for this property
     * @var bool|null $notify public property
     */
    public $notify;

    /**
     * @todo Write general description for this property
     * @var bool|null $appendComment public property
     */
    public $appendComment;

    /**
     * Interface InvoiceCommentCreationInterface
     * @var \MagentoCommunityLib\Models\SalesDataInvoiceCommentCreationInterface|null $comment public property
     */
    public $comment;

    /**
     * Interface for creation arguments for Invoice.
     * @var \MagentoCommunityLib\Models\SalesDataInvoiceCreationArgumentsInterface|null $arguments public property
     */
    public $arguments;

    /**
     * Constructor to set initial or default values of member properties
     * @param bool                                       $capture       Initialization value for $this->capture
     * @param array                                      $items         Initialization value for $this->items
     * @param bool                                       $notify        Initialization value for $this->notify
     * @param bool                                       $appendComment Initialization value for $this->appendComment
     * @param SalesDataInvoiceCommentCreationInterface   $comment       Initialization value for $this->comment
     * @param SalesDataInvoiceCreationArgumentsInterface $arguments     Initialization value for $this->arguments
     */
    public function __construct()
    {
        if (6 == func_num_args()) {
            $this->capture       = func_get_arg(0);
            $this->items         = func_get_arg(1);
            $this->notify        = func_get_arg(2);
            $this->appendComment = func_get_arg(3);
            $this->comment       = func_get_arg(4);
            $this->arguments     = func_get_arg(5);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['capture']       = $this->capture;
        $json['items']         = $this->items;
        $json['notify']        = $this->notify;
        $json['appendComment'] = $this->appendComment;
        $json['comment']       = $this->comment;
        $json['arguments']     = $this->arguments;

        return $json;
    }
}

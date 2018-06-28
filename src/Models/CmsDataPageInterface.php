<?php
/*
 * MagentoCommunityLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace MagentoCommunityLib\Models;

use JsonSerializable;

/**
 *CMS page interface.
 */
class CmsDataPageInterface implements JsonSerializable
{
    /**
     * Identifier
     * @required
     * @var string $identifier public property
     */
    public $identifier;

    /**
     * ID
     * @var integer|null $id public property
     */
    public $id;

    /**
     * Title
     * @var string|null $title public property
     */
    public $title;

    /**
     * Page layout
     * @maps page_layout
     * @var string|null $pageLayout public property
     */
    public $pageLayout;

    /**
     * Meta title
     * @maps meta_title
     * @var string|null $metaTitle public property
     */
    public $metaTitle;

    /**
     * Meta keywords
     * @maps meta_keywords
     * @var string|null $metaKeywords public property
     */
    public $metaKeywords;

    /**
     * Meta description
     * @maps meta_description
     * @var string|null $metaDescription public property
     */
    public $metaDescription;

    /**
     * Content heading
     * @maps content_heading
     * @var string|null $contentHeading public property
     */
    public $contentHeading;

    /**
     * Content
     * @var string|null $content public property
     */
    public $content;

    /**
     * Creation time
     * @maps creation_time
     * @var string|null $creationTime public property
     */
    public $creationTime;

    /**
     * Update time
     * @maps update_time
     * @var string|null $updateTime public property
     */
    public $updateTime;

    /**
     * Sort order
     * @maps sort_order
     * @var string|null $sortOrder public property
     */
    public $sortOrder;

    /**
     * Layout update xml
     * @maps layout_update_xml
     * @var string|null $layoutUpdateXml public property
     */
    public $layoutUpdateXml;

    /**
     * Custom theme
     * @maps custom_theme
     * @var string|null $customTheme public property
     */
    public $customTheme;

    /**
     * Custom root template
     * @maps custom_root_template
     * @var string|null $customRootTemplate public property
     */
    public $customRootTemplate;

    /**
     * Custom layout update xml
     * @maps custom_layout_update_xml
     * @var string|null $customLayoutUpdateXml public property
     */
    public $customLayoutUpdateXml;

    /**
     * Custom theme from
     * @maps custom_theme_from
     * @var string|null $customThemeFrom public property
     */
    public $customThemeFrom;

    /**
     * Custom theme to
     * @maps custom_theme_to
     * @var string|null $customThemeTo public property
     */
    public $customThemeTo;

    /**
     * Active
     * @var bool|null $active public property
     */
    public $active;

    /**
     * Constructor to set initial or default values of member properties
     * @param string  $identifier            Initialization value for $this->identifier
     * @param integer $id                    Initialization value for $this->id
     * @param string  $title                 Initialization value for $this->title
     * @param string  $pageLayout            Initialization value for $this->pageLayout
     * @param string  $metaTitle             Initialization value for $this->metaTitle
     * @param string  $metaKeywords          Initialization value for $this->metaKeywords
     * @param string  $metaDescription       Initialization value for $this->metaDescription
     * @param string  $contentHeading        Initialization value for $this->contentHeading
     * @param string  $content               Initialization value for $this->content
     * @param string  $creationTime          Initialization value for $this->creationTime
     * @param string  $updateTime            Initialization value for $this->updateTime
     * @param string  $sortOrder             Initialization value for $this->sortOrder
     * @param string  $layoutUpdateXml       Initialization value for $this->layoutUpdateXml
     * @param string  $customTheme           Initialization value for $this->customTheme
     * @param string  $customRootTemplate    Initialization value for $this->customRootTemplate
     * @param string  $customLayoutUpdateXml Initialization value for $this->customLayoutUpdateXml
     * @param string  $customThemeFrom       Initialization value for $this->customThemeFrom
     * @param string  $customThemeTo         Initialization value for $this->customThemeTo
     * @param bool    $active                Initialization value for $this->active
     */
    public function __construct()
    {
        if (19 == func_num_args()) {
            $this->identifier            = func_get_arg(0);
            $this->id                    = func_get_arg(1);
            $this->title                 = func_get_arg(2);
            $this->pageLayout            = func_get_arg(3);
            $this->metaTitle             = func_get_arg(4);
            $this->metaKeywords          = func_get_arg(5);
            $this->metaDescription       = func_get_arg(6);
            $this->contentHeading        = func_get_arg(7);
            $this->content               = func_get_arg(8);
            $this->creationTime          = func_get_arg(9);
            $this->updateTime            = func_get_arg(10);
            $this->sortOrder             = func_get_arg(11);
            $this->layoutUpdateXml       = func_get_arg(12);
            $this->customTheme           = func_get_arg(13);
            $this->customRootTemplate    = func_get_arg(14);
            $this->customLayoutUpdateXml = func_get_arg(15);
            $this->customThemeFrom       = func_get_arg(16);
            $this->customThemeTo         = func_get_arg(17);
            $this->active                = func_get_arg(18);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['identifier']               = $this->identifier;
        $json['id']                       = $this->id;
        $json['title']                    = $this->title;
        $json['page_layout']              = $this->pageLayout;
        $json['meta_title']               = $this->metaTitle;
        $json['meta_keywords']            = $this->metaKeywords;
        $json['meta_description']         = $this->metaDescription;
        $json['content_heading']          = $this->contentHeading;
        $json['content']                  = $this->content;
        $json['creation_time']            = $this->creationTime;
        $json['update_time']              = $this->updateTime;
        $json['sort_order']               = $this->sortOrder;
        $json['layout_update_xml']        = $this->layoutUpdateXml;
        $json['custom_theme']             = $this->customTheme;
        $json['custom_root_template']     = $this->customRootTemplate;
        $json['custom_layout_update_xml'] = $this->customLayoutUpdateXml;
        $json['custom_theme_from']        = $this->customThemeFrom;
        $json['custom_theme_to']          = $this->customThemeTo;
        $json['active']                   = $this->active;

        return $json;
    }
}

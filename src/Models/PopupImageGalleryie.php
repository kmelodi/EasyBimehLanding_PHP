<?php
/*
 * EasyBimehLandingLib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace EasyBimehLandingLib\Models;

use JsonSerializable;

/**
 * @todo Write general description for this model
 */
class PopupImageGalleryie implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @maps _cached
     * @var bool $cached public property
     */
    public $cached;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $url public property
     */
    public $url;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $thumbnailUrl public property
     */
    public $thumbnailUrl;

    /**
     * @todo Write general description for this property
     * @var string|null $altText public property
     */
    public $altText;

    /**
     * @todo Write general description for this property
     * @var string|null $title public property
     */
    public $title;

    /**
     * @todo Write general description for this property
     * @var string|null $extUrl public property
     */
    public $extUrl;

    /**
     * @todo Write general description for this property
     * @var string|null $extUrlTarget public property
     */
    public $extUrlTarget;

    /**
     * Constructor to set initial or default values of member properties
     * @param bool   $cached       Initialization value for $this->cached
     * @param string $url          Initialization value for $this->url
     * @param string $thumbnailUrl Initialization value for $this->thumbnailUrl
     * @param string $altText      Initialization value for $this->altText
     * @param string $title        Initialization value for $this->title
     * @param string $extUrl       Initialization value for $this->extUrl
     * @param string $extUrlTarget Initialization value for $this->extUrlTarget
     */
    public function __construct()
    {
        if (7 == func_num_args()) {
            $this->cached       = func_get_arg(0);
            $this->url          = func_get_arg(1);
            $this->thumbnailUrl = func_get_arg(2);
            $this->altText      = func_get_arg(3);
            $this->title        = func_get_arg(4);
            $this->extUrl       = func_get_arg(5);
            $this->extUrlTarget = func_get_arg(6);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['_cached']      = $this->cached;
        $json['url']          = $this->url;
        $json['thumbnailUrl'] = $this->thumbnailUrl;
        $json['altText']      = $this->altText;
        $json['title']        = $this->title;
        $json['extUrl']       = $this->extUrl;
        $json['extUrlTarget'] = $this->extUrlTarget;

        return $json;
    }
}
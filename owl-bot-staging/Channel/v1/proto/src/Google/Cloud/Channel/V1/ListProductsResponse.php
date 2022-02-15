<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/channel/v1/service.proto

namespace Google\Cloud\Channel\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for ListProducts.
 *
 * Generated from protobuf message <code>google.cloud.channel.v1.ListProductsResponse</code>
 */
class ListProductsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * List of Products requested.
     *
     * Generated from protobuf field <code>repeated .google.cloud.channel.v1.Product products = 1;</code>
     */
    private $products;
    /**
     * A token to retrieve the next page of results.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Channel\V1\Product[]|\Google\Protobuf\Internal\RepeatedField $products
     *           List of Products requested.
     *     @type string $next_page_token
     *           A token to retrieve the next page of results.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Channel\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * List of Products requested.
     *
     * Generated from protobuf field <code>repeated .google.cloud.channel.v1.Product products = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * List of Products requested.
     *
     * Generated from protobuf field <code>repeated .google.cloud.channel.v1.Product products = 1;</code>
     * @param \Google\Cloud\Channel\V1\Product[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setProducts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Channel\V1\Product::class);
        $this->products = $arr;

        return $this;
    }

    /**
     * A token to retrieve the next page of results.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token to retrieve the next page of results.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/channel/v1/service.proto

namespace Google\Cloud\Channel\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for ListProducts.
 *
 * Generated from protobuf message <code>google.cloud.channel.v1.ListProductsRequest</code>
 */
class ListProductsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the reseller account.
     * Format: accounts/{account_id}.
     *
     * Generated from protobuf field <code>string account = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $account = '';
    /**
     * Optional. Requested page size. Server might return fewer results than requested.
     * If unspecified, returns at most 100 Products.
     * The maximum value is 1000; the server will coerce values above 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_size = 0;
    /**
     * Optional. A token for a page of results other than the first page.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $page_token = '';
    /**
     * Optional. The BCP-47 language code. For example, "en-US". The
     * response will localize in the corresponding language code, if specified.
     * The default value is "en-US".
     *
     * Generated from protobuf field <code>string language_code = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $language_code = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $account
     *           Required. The resource name of the reseller account.
     *           Format: accounts/{account_id}.
     *     @type int $page_size
     *           Optional. Requested page size. Server might return fewer results than requested.
     *           If unspecified, returns at most 100 Products.
     *           The maximum value is 1000; the server will coerce values above 1000.
     *     @type string $page_token
     *           Optional. A token for a page of results other than the first page.
     *     @type string $language_code
     *           Optional. The BCP-47 language code. For example, "en-US". The
     *           response will localize in the corresponding language code, if specified.
     *           The default value is "en-US".
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Channel\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the reseller account.
     * Format: accounts/{account_id}.
     *
     * Generated from protobuf field <code>string account = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Required. The resource name of the reseller account.
     * Format: accounts/{account_id}.
     *
     * Generated from protobuf field <code>string account = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setAccount($var)
    {
        GPBUtil::checkString($var, True);
        $this->account = $var;

        return $this;
    }

    /**
     * Optional. Requested page size. Server might return fewer results than requested.
     * If unspecified, returns at most 100 Products.
     * The maximum value is 1000; the server will coerce values above 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Optional. Requested page size. Server might return fewer results than requested.
     * If unspecified, returns at most 100 Products.
     * The maximum value is 1000; the server will coerce values above 1000.
     *
     * Generated from protobuf field <code>int32 page_size = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * Optional. A token for a page of results other than the first page.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * Optional. A token for a page of results other than the first page.
     *
     * Generated from protobuf field <code>string page_token = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * Optional. The BCP-47 language code. For example, "en-US". The
     * response will localize in the corresponding language code, if specified.
     * The default value is "en-US".
     *
     * Generated from protobuf field <code>string language_code = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->language_code;
    }

    /**
     * Optional. The BCP-47 language code. For example, "en-US". The
     * response will localize in the corresponding language code, if specified.
     * The default value is "en-US".
     *
     * Generated from protobuf field <code>string language_code = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setLanguageCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->language_code = $var;

        return $this;
    }

}


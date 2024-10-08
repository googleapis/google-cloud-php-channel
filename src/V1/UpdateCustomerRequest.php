<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/channel/v1/service.proto

namespace Google\Cloud\Channel\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [CloudChannelService.UpdateCustomer][google.cloud.channel.v1.CloudChannelService.UpdateCustomer].
 *
 * Generated from protobuf message <code>google.cloud.channel.v1.UpdateCustomerRequest</code>
 */
class UpdateCustomerRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. New contents of the customer.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.Customer customer = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $customer = null;
    /**
     * The update mask that applies to the resource.
     * Optional.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 3;</code>
     */
    protected $update_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Channel\V1\Customer $customer
     *           Required. New contents of the customer.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           The update mask that applies to the resource.
     *           Optional.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Channel\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. New contents of the customer.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.Customer customer = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Channel\V1\Customer|null
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    public function hasCustomer()
    {
        return isset($this->customer);
    }

    public function clearCustomer()
    {
        unset($this->customer);
    }

    /**
     * Required. New contents of the customer.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.Customer customer = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Channel\V1\Customer $var
     * @return $this
     */
    public function setCustomer($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Channel\V1\Customer::class);
        $this->customer = $var;

        return $this;
    }

    /**
     * The update mask that applies to the resource.
     * Optional.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 3;</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * The update mask that applies to the resource.
     * Optional.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 3;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}


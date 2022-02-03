<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/channel/v1/entitlements.proto

namespace Google\Cloud\Channel\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Service provisioned for an entitlement.
 *
 * Generated from protobuf message <code>google.cloud.channel.v1.ProvisionedService</code>
 */
class ProvisionedService extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Provisioning ID of the entitlement. For Google Workspace, this would be the
     * underlying Subscription ID. For Google Cloud Platform, this would be the
     * Billing Account ID of the billing subaccount."
     *
     * Generated from protobuf field <code>string provisioning_id = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $provisioning_id = '';
    /**
     * Output only. The product pertaining to the provisioning resource as specified in the
     * Offer.
     *
     * Generated from protobuf field <code>string product_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $product_id = '';
    /**
     * Output only. The SKU pertaining to the provisioning resource as specified in the Offer.
     *
     * Generated from protobuf field <code>string sku_id = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $sku_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $provisioning_id
     *           Output only. Provisioning ID of the entitlement. For Google Workspace, this would be the
     *           underlying Subscription ID. For Google Cloud Platform, this would be the
     *           Billing Account ID of the billing subaccount."
     *     @type string $product_id
     *           Output only. The product pertaining to the provisioning resource as specified in the
     *           Offer.
     *     @type string $sku_id
     *           Output only. The SKU pertaining to the provisioning resource as specified in the Offer.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Channel\V1\Entitlements::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Provisioning ID of the entitlement. For Google Workspace, this would be the
     * underlying Subscription ID. For Google Cloud Platform, this would be the
     * Billing Account ID of the billing subaccount."
     *
     * Generated from protobuf field <code>string provisioning_id = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getProvisioningId()
    {
        return $this->provisioning_id;
    }

    /**
     * Output only. Provisioning ID of the entitlement. For Google Workspace, this would be the
     * underlying Subscription ID. For Google Cloud Platform, this would be the
     * Billing Account ID of the billing subaccount."
     *
     * Generated from protobuf field <code>string provisioning_id = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setProvisioningId($var)
    {
        GPBUtil::checkString($var, True);
        $this->provisioning_id = $var;

        return $this;
    }

    /**
     * Output only. The product pertaining to the provisioning resource as specified in the
     * Offer.
     *
     * Generated from protobuf field <code>string product_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getProductId()
    {
        return $this->product_id;
    }

    /**
     * Output only. The product pertaining to the provisioning resource as specified in the
     * Offer.
     *
     * Generated from protobuf field <code>string product_id = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setProductId($var)
    {
        GPBUtil::checkString($var, True);
        $this->product_id = $var;

        return $this;
    }

    /**
     * Output only. The SKU pertaining to the provisioning resource as specified in the Offer.
     *
     * Generated from protobuf field <code>string sku_id = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getSkuId()
    {
        return $this->sku_id;
    }

    /**
     * Output only. The SKU pertaining to the provisioning resource as specified in the Offer.
     *
     * Generated from protobuf field <code>string sku_id = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setSkuId($var)
    {
        GPBUtil::checkString($var, True);
        $this->sku_id = $var;

        return $this;
    }

}


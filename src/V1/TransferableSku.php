<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/channel/v1/entitlements.proto

namespace Google\Cloud\Channel\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * TransferableSku represents information a reseller needs to view existing
 * provisioned services for a customer that they do not own.
 * Read-only.
 *
 * Generated from protobuf message <code>google.cloud.channel.v1.TransferableSku</code>
 */
class TransferableSku extends \Google\Protobuf\Internal\Message
{
    /**
     * Describes the transfer eligibility of a SKU.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.TransferEligibility transfer_eligibility = 9;</code>
     */
    protected $transfer_eligibility = null;
    /**
     * The SKU pertaining to the provisioning resource as specified in the Offer.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.Sku sku = 11;</code>
     */
    protected $sku = null;
    /**
     * Optional. The customer to transfer has an entitlement with the populated
     * legacy SKU.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.Sku legacy_sku = 12 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $legacy_sku = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Channel\V1\TransferEligibility $transfer_eligibility
     *           Describes the transfer eligibility of a SKU.
     *     @type \Google\Cloud\Channel\V1\Sku $sku
     *           The SKU pertaining to the provisioning resource as specified in the Offer.
     *     @type \Google\Cloud\Channel\V1\Sku $legacy_sku
     *           Optional. The customer to transfer has an entitlement with the populated
     *           legacy SKU.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Channel\V1\Entitlements::initOnce();
        parent::__construct($data);
    }

    /**
     * Describes the transfer eligibility of a SKU.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.TransferEligibility transfer_eligibility = 9;</code>
     * @return \Google\Cloud\Channel\V1\TransferEligibility|null
     */
    public function getTransferEligibility()
    {
        return $this->transfer_eligibility;
    }

    public function hasTransferEligibility()
    {
        return isset($this->transfer_eligibility);
    }

    public function clearTransferEligibility()
    {
        unset($this->transfer_eligibility);
    }

    /**
     * Describes the transfer eligibility of a SKU.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.TransferEligibility transfer_eligibility = 9;</code>
     * @param \Google\Cloud\Channel\V1\TransferEligibility $var
     * @return $this
     */
    public function setTransferEligibility($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Channel\V1\TransferEligibility::class);
        $this->transfer_eligibility = $var;

        return $this;
    }

    /**
     * The SKU pertaining to the provisioning resource as specified in the Offer.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.Sku sku = 11;</code>
     * @return \Google\Cloud\Channel\V1\Sku|null
     */
    public function getSku()
    {
        return $this->sku;
    }

    public function hasSku()
    {
        return isset($this->sku);
    }

    public function clearSku()
    {
        unset($this->sku);
    }

    /**
     * The SKU pertaining to the provisioning resource as specified in the Offer.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.Sku sku = 11;</code>
     * @param \Google\Cloud\Channel\V1\Sku $var
     * @return $this
     */
    public function setSku($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Channel\V1\Sku::class);
        $this->sku = $var;

        return $this;
    }

    /**
     * Optional. The customer to transfer has an entitlement with the populated
     * legacy SKU.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.Sku legacy_sku = 12 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Channel\V1\Sku|null
     */
    public function getLegacySku()
    {
        return $this->legacy_sku;
    }

    public function hasLegacySku()
    {
        return isset($this->legacy_sku);
    }

    public function clearLegacySku()
    {
        unset($this->legacy_sku);
    }

    /**
     * Optional. The customer to transfer has an entitlement with the populated
     * legacy SKU.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.Sku legacy_sku = 12 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Channel\V1\Sku $var
     * @return $this
     */
    public function setLegacySku($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Channel\V1\Sku::class);
        $this->legacy_sku = $var;

        return $this;
    }

}


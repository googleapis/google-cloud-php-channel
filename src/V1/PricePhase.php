<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/channel/v1/offers.proto

namespace Google\Cloud\Channel\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Specifies the price by the duration of months.
 * For example, a 20% discount for the first six months, then a 10% discount
 * starting on the seventh month.
 *
 * Generated from protobuf message <code>google.cloud.channel.v1.PricePhase</code>
 */
class PricePhase extends \Google\Protobuf\Internal\Message
{
    /**
     * Defines the phase period type.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.PeriodType period_type = 1;</code>
     */
    protected $period_type = 0;
    /**
     * Defines first period for the phase.
     *
     * Generated from protobuf field <code>int32 first_period = 2;</code>
     */
    protected $first_period = 0;
    /**
     * Defines first period for the phase.
     *
     * Generated from protobuf field <code>int32 last_period = 3;</code>
     */
    protected $last_period = 0;
    /**
     * Price of the phase. Present if there are no price tiers.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.Price price = 4;</code>
     */
    protected $price = null;
    /**
     * Price by the resource tiers.
     *
     * Generated from protobuf field <code>repeated .google.cloud.channel.v1.PriceTier price_tiers = 5;</code>
     */
    private $price_tiers;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $period_type
     *           Defines the phase period type.
     *     @type int $first_period
     *           Defines first period for the phase.
     *     @type int $last_period
     *           Defines first period for the phase.
     *     @type \Google\Cloud\Channel\V1\Price $price
     *           Price of the phase. Present if there are no price tiers.
     *     @type array<\Google\Cloud\Channel\V1\PriceTier>|\Google\Protobuf\Internal\RepeatedField $price_tiers
     *           Price by the resource tiers.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Channel\V1\Offers::initOnce();
        parent::__construct($data);
    }

    /**
     * Defines the phase period type.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.PeriodType period_type = 1;</code>
     * @return int
     */
    public function getPeriodType()
    {
        return $this->period_type;
    }

    /**
     * Defines the phase period type.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.PeriodType period_type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setPeriodType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Channel\V1\PeriodType::class);
        $this->period_type = $var;

        return $this;
    }

    /**
     * Defines first period for the phase.
     *
     * Generated from protobuf field <code>int32 first_period = 2;</code>
     * @return int
     */
    public function getFirstPeriod()
    {
        return $this->first_period;
    }

    /**
     * Defines first period for the phase.
     *
     * Generated from protobuf field <code>int32 first_period = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setFirstPeriod($var)
    {
        GPBUtil::checkInt32($var);
        $this->first_period = $var;

        return $this;
    }

    /**
     * Defines first period for the phase.
     *
     * Generated from protobuf field <code>int32 last_period = 3;</code>
     * @return int
     */
    public function getLastPeriod()
    {
        return $this->last_period;
    }

    /**
     * Defines first period for the phase.
     *
     * Generated from protobuf field <code>int32 last_period = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setLastPeriod($var)
    {
        GPBUtil::checkInt32($var);
        $this->last_period = $var;

        return $this;
    }

    /**
     * Price of the phase. Present if there are no price tiers.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.Price price = 4;</code>
     * @return \Google\Cloud\Channel\V1\Price|null
     */
    public function getPrice()
    {
        return $this->price;
    }

    public function hasPrice()
    {
        return isset($this->price);
    }

    public function clearPrice()
    {
        unset($this->price);
    }

    /**
     * Price of the phase. Present if there are no price tiers.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.Price price = 4;</code>
     * @param \Google\Cloud\Channel\V1\Price $var
     * @return $this
     */
    public function setPrice($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Channel\V1\Price::class);
        $this->price = $var;

        return $this;
    }

    /**
     * Price by the resource tiers.
     *
     * Generated from protobuf field <code>repeated .google.cloud.channel.v1.PriceTier price_tiers = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPriceTiers()
    {
        return $this->price_tiers;
    }

    /**
     * Price by the resource tiers.
     *
     * Generated from protobuf field <code>repeated .google.cloud.channel.v1.PriceTier price_tiers = 5;</code>
     * @param array<\Google\Cloud\Channel\V1\PriceTier>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPriceTiers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Channel\V1\PriceTier::class);
        $this->price_tiers = $arr;

        return $this;
    }

}


<?php

/**
 * KlineCandlestickDataResponseInner.
 *
 * PHP version 8.1
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 */

/**
 * Binance Derivatives Trading Options REST API.
 *
 * OpenAPI Specification for the Binance Derivatives Trading Options REST API
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.12.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Binance\Client\DerivativesTradingOptions\Model;

use Binance\Common\Dtos\ModelInterface;
use Binance\Common\ObjectSerializer;

/**
 * KlineCandlestickDataResponseInner Class Doc Comment.
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 *
 * @implements \ArrayAccess<string, mixed>
 */
class KlineCandlestickDataResponseInner implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'klineCandlestickDataResponse_inner';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'open' => 'string',
        'high' => 'string',
        'low' => 'string',
        'close' => 'string',
        'volume' => 'string',
        'amount' => 'string',
        'interval' => 'string',
        'tradeCount' => 'int',
        'takerVolume' => 'string',
        'takerAmount' => 'string',
        'openTime' => 'int',
        'closeTime' => 'int',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     *
     * @phpstan-var array<string, string|null>
     *
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'open' => null,
        'high' => null,
        'low' => null,
        'close' => null,
        'volume' => null,
        'amount' => null,
        'interval' => null,
        'tradeCount' => 'int64',
        'takerVolume' => null,
        'takerAmount' => null,
        'openTime' => 'int64',
        'closeTime' => 'int64',
    ];

    /**
     * Array of nullable properties. Used for (de)serialization.
     *
     * @var bool[]
     */
    protected static array $openAPINullables = [
        'open' => false,
        'high' => false,
        'low' => false,
        'close' => false,
        'volume' => false,
        'amount' => false,
        'interval' => false,
        'tradeCount' => false,
        'takerVolume' => false,
        'takerAmount' => false,
        'openTime' => false,
        'closeTime' => false,
    ];

    /**
     * If a nullable field gets set to null, insert it here.
     *
     * @var bool[]
     */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'open' => 'open',
        'high' => 'high',
        'low' => 'low',
        'close' => 'close',
        'volume' => 'volume',
        'amount' => 'amount',
        'interval' => 'interval',
        'tradeCount' => 'tradeCount',
        'takerVolume' => 'takerVolume',
        'takerAmount' => 'takerAmount',
        'openTime' => 'openTime',
        'closeTime' => 'closeTime',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'open' => 'setOpen',
        'high' => 'setHigh',
        'low' => 'setLow',
        'close' => 'setClose',
        'volume' => 'setVolume',
        'amount' => 'setAmount',
        'interval' => 'setInterval',
        'tradeCount' => 'setTradeCount',
        'takerVolume' => 'setTakerVolume',
        'takerAmount' => 'setTakerAmount',
        'openTime' => 'setOpenTime',
        'closeTime' => 'setCloseTime',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'open' => 'getOpen',
        'high' => 'getHigh',
        'low' => 'getLow',
        'close' => 'getClose',
        'volume' => 'getVolume',
        'amount' => 'getAmount',
        'interval' => 'getInterval',
        'tradeCount' => 'getTradeCount',
        'takerVolume' => 'getTakerVolume',
        'takerAmount' => 'getTakerAmount',
        'openTime' => 'getOpenTime',
        'closeTime' => 'getCloseTime',
    ];

    /**
     * Associative array for storing property values.
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor.
     *
     * @param null|mixed[] $data Associated array of property values
     *                           initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('open', $data ?? [], null);
        $this->setIfExists('high', $data ?? [], null);
        $this->setIfExists('low', $data ?? [], null);
        $this->setIfExists('close', $data ?? [], null);
        $this->setIfExists('volume', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('interval', $data ?? [], null);
        $this->setIfExists('tradeCount', $data ?? [], null);
        $this->setIfExists('takerVolume', $data ?? [], null);
        $this->setIfExists('takerAmount', $data ?? [], null);
        $this->setIfExists('openTime', $data ?? [], null);
        $this->setIfExists('closeTime', $data ?? [], null);
    }

    /**
     * Gets the string presentation of the object.
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * If oneOf schema, get the possible response types.
     */
    public static function getComposedSchemas(): array
    {
        return [
        ];
    }

    /**
     * Return true if the model is an array.
     */
    public static function isArray(): bool
    {
        return false;
    }

    /**
     * Checks if a property is nullable.
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        return [];
    }

    /**
     * Validate all the properties in the model
     * return true if all passed.
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return 0 === count($this->listInvalidProperties());
    }

    /**
     * Gets open.
     *
     * @return null|string
     */
    public function getOpen()
    {
        return $this->container['open'];
    }

    /**
     * Sets open.
     *
     * @param null|string $open open
     *
     * @return self
     */
    public function setOpen($open)
    {
        if (is_null($open)) {
            throw new \InvalidArgumentException('non-nullable open cannot be null');
        }
        $this->container['open'] = $open;

        return $this;
    }

    /**
     * Gets high.
     *
     * @return null|string
     */
    public function getHigh()
    {
        return $this->container['high'];
    }

    /**
     * Sets high.
     *
     * @param null|string $high high
     *
     * @return self
     */
    public function setHigh($high)
    {
        if (is_null($high)) {
            throw new \InvalidArgumentException('non-nullable high cannot be null');
        }
        $this->container['high'] = $high;

        return $this;
    }

    /**
     * Gets low.
     *
     * @return null|string
     */
    public function getLow()
    {
        return $this->container['low'];
    }

    /**
     * Sets low.
     *
     * @param null|string $low low
     *
     * @return self
     */
    public function setLow($low)
    {
        if (is_null($low)) {
            throw new \InvalidArgumentException('non-nullable low cannot be null');
        }
        $this->container['low'] = $low;

        return $this;
    }

    /**
     * Gets close.
     *
     * @return null|string
     */
    public function getClose()
    {
        return $this->container['close'];
    }

    /**
     * Sets close.
     *
     * @param null|string $close close
     *
     * @return self
     */
    public function setClose($close)
    {
        if (is_null($close)) {
            throw new \InvalidArgumentException('non-nullable close cannot be null');
        }
        $this->container['close'] = $close;

        return $this;
    }

    /**
     * Gets volume.
     *
     * @return null|string
     */
    public function getVolume()
    {
        return $this->container['volume'];
    }

    /**
     * Sets volume.
     *
     * @param null|string $volume volume
     *
     * @return self
     */
    public function setVolume($volume)
    {
        if (is_null($volume)) {
            throw new \InvalidArgumentException('non-nullable volume cannot be null');
        }
        $this->container['volume'] = $volume;

        return $this;
    }

    /**
     * Gets amount.
     *
     * @return null|string
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount.
     *
     * @param null|string $amount amount
     *
     * @return self
     */
    public function setAmount($amount)
    {
        if (is_null($amount)) {
            throw new \InvalidArgumentException('non-nullable amount cannot be null');
        }
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets interval.
     *
     * @return null|string
     */
    public function getInterval()
    {
        return $this->container['interval'];
    }

    /**
     * Sets interval.
     *
     * @param null|string $interval interval
     *
     * @return self
     */
    public function setInterval($interval)
    {
        if (is_null($interval)) {
            throw new \InvalidArgumentException('non-nullable interval cannot be null');
        }
        $this->container['interval'] = $interval;

        return $this;
    }

    /**
     * Gets tradeCount.
     *
     * @return null|int
     */
    public function getTradeCount()
    {
        return $this->container['tradeCount'];
    }

    /**
     * Sets tradeCount.
     *
     * @param null|int $tradeCount tradeCount
     *
     * @return self
     */
    public function setTradeCount($tradeCount)
    {
        if (is_null($tradeCount)) {
            throw new \InvalidArgumentException('non-nullable tradeCount cannot be null');
        }
        $this->container['tradeCount'] = $tradeCount;

        return $this;
    }

    /**
     * Gets takerVolume.
     *
     * @return null|string
     */
    public function getTakerVolume()
    {
        return $this->container['takerVolume'];
    }

    /**
     * Sets takerVolume.
     *
     * @param null|string $takerVolume takerVolume
     *
     * @return self
     */
    public function setTakerVolume($takerVolume)
    {
        if (is_null($takerVolume)) {
            throw new \InvalidArgumentException('non-nullable takerVolume cannot be null');
        }
        $this->container['takerVolume'] = $takerVolume;

        return $this;
    }

    /**
     * Gets takerAmount.
     *
     * @return null|string
     */
    public function getTakerAmount()
    {
        return $this->container['takerAmount'];
    }

    /**
     * Sets takerAmount.
     *
     * @param null|string $takerAmount takerAmount
     *
     * @return self
     */
    public function setTakerAmount($takerAmount)
    {
        if (is_null($takerAmount)) {
            throw new \InvalidArgumentException('non-nullable takerAmount cannot be null');
        }
        $this->container['takerAmount'] = $takerAmount;

        return $this;
    }

    /**
     * Gets openTime.
     *
     * @return null|int
     */
    public function getOpenTime()
    {
        return $this->container['openTime'];
    }

    /**
     * Sets openTime.
     *
     * @param null|int $openTime openTime
     *
     * @return self
     */
    public function setOpenTime($openTime)
    {
        if (is_null($openTime)) {
            throw new \InvalidArgumentException('non-nullable openTime cannot be null');
        }
        $this->container['openTime'] = $openTime;

        return $this;
    }

    /**
     * Gets closeTime.
     *
     * @return null|int
     */
    public function getCloseTime()
    {
        return $this->container['closeTime'];
    }

    /**
     * Sets closeTime.
     *
     * @param null|int $closeTime closeTime
     *
     * @return self
     */
    public function setCloseTime($closeTime)
    {
        if (is_null($closeTime)) {
            throw new \InvalidArgumentException('non-nullable closeTime cannot be null');
        }
        $this->container['closeTime'] = $closeTime;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param int $offset Offset
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param int $offset Offset
     *
     * @return null|mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param null|int $offset Offset
     * @param mixed    $value  Value to be set
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param int $offset Offset
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     *
     * @see https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed returns data which can be serialized by json_encode(), which is a value
     *               of any type other than a resource
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets a header-safe presentation of the object.
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }

    /**
     * Array of nullable properties.
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null.
     *
     * @return bool[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null.
     *
     * @param bool[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
     * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
     * $this->openAPINullablesSetToNull array.
     *
     * @param mixed $defaultValue
     */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }
}

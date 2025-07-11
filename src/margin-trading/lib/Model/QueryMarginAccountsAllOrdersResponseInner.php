<?php

/**
 * QueryMarginAccountsAllOrdersResponseInner.
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
 * Binance Margin Trading REST API.
 *
 * OpenAPI Specification for the Binance Margin Trading REST API
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

namespace Binance\Client\MarginTrading\Model;

use Binance\Common\Dtos\ModelInterface;
use Binance\Common\ObjectSerializer;

/**
 * QueryMarginAccountsAllOrdersResponseInner Class Doc Comment.
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 *
 * @implements \ArrayAccess<string, mixed>
 */
class QueryMarginAccountsAllOrdersResponseInner implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'queryMarginAccountsAllOrdersResponse_inner';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'clientOrderId' => 'string',
        'cummulativeQuoteQty' => 'string',
        'executedQty' => 'string',
        'icebergQty' => 'string',
        'isWorking' => 'bool',
        'orderId' => 'int',
        'origQty' => 'string',
        'price' => 'string',
        'side' => 'string',
        'status' => 'string',
        'stopPrice' => 'string',
        'symbol' => 'string',
        'isIsolated' => 'bool',
        'time' => 'int',
        'timeInForce' => 'string',
        'type' => 'string',
        'selfTradePreventionMode' => 'string',
        'updateTime' => 'int',
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
        'clientOrderId' => null,
        'cummulativeQuoteQty' => null,
        'executedQty' => null,
        'icebergQty' => null,
        'isWorking' => null,
        'orderId' => 'int64',
        'origQty' => null,
        'price' => null,
        'side' => null,
        'status' => null,
        'stopPrice' => null,
        'symbol' => null,
        'isIsolated' => null,
        'time' => 'int64',
        'timeInForce' => null,
        'type' => null,
        'selfTradePreventionMode' => null,
        'updateTime' => 'int64',
    ];

    /**
     * Array of nullable properties. Used for (de)serialization.
     *
     * @var bool[]
     */
    protected static array $openAPINullables = [
        'clientOrderId' => false,
        'cummulativeQuoteQty' => false,
        'executedQty' => false,
        'icebergQty' => false,
        'isWorking' => false,
        'orderId' => false,
        'origQty' => false,
        'price' => false,
        'side' => false,
        'status' => false,
        'stopPrice' => false,
        'symbol' => false,
        'isIsolated' => false,
        'time' => false,
        'timeInForce' => false,
        'type' => false,
        'selfTradePreventionMode' => false,
        'updateTime' => false,
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
        'clientOrderId' => 'clientOrderId',
        'cummulativeQuoteQty' => 'cummulativeQuoteQty',
        'executedQty' => 'executedQty',
        'icebergQty' => 'icebergQty',
        'isWorking' => 'isWorking',
        'orderId' => 'orderId',
        'origQty' => 'origQty',
        'price' => 'price',
        'side' => 'side',
        'status' => 'status',
        'stopPrice' => 'stopPrice',
        'symbol' => 'symbol',
        'isIsolated' => 'isIsolated',
        'time' => 'time',
        'timeInForce' => 'timeInForce',
        'type' => 'type',
        'selfTradePreventionMode' => 'selfTradePreventionMode',
        'updateTime' => 'updateTime',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'clientOrderId' => 'setClientOrderId',
        'cummulativeQuoteQty' => 'setCummulativeQuoteQty',
        'executedQty' => 'setExecutedQty',
        'icebergQty' => 'setIcebergQty',
        'isWorking' => 'setIsWorking',
        'orderId' => 'setOrderId',
        'origQty' => 'setOrigQty',
        'price' => 'setPrice',
        'side' => 'setSide',
        'status' => 'setStatus',
        'stopPrice' => 'setStopPrice',
        'symbol' => 'setSymbol',
        'isIsolated' => 'setIsIsolated',
        'time' => 'setTime',
        'timeInForce' => 'setTimeInForce',
        'type' => 'setType',
        'selfTradePreventionMode' => 'setSelfTradePreventionMode',
        'updateTime' => 'setUpdateTime',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'clientOrderId' => 'getClientOrderId',
        'cummulativeQuoteQty' => 'getCummulativeQuoteQty',
        'executedQty' => 'getExecutedQty',
        'icebergQty' => 'getIcebergQty',
        'isWorking' => 'getIsWorking',
        'orderId' => 'getOrderId',
        'origQty' => 'getOrigQty',
        'price' => 'getPrice',
        'side' => 'getSide',
        'status' => 'getStatus',
        'stopPrice' => 'getStopPrice',
        'symbol' => 'getSymbol',
        'isIsolated' => 'getIsIsolated',
        'time' => 'getTime',
        'timeInForce' => 'getTimeInForce',
        'type' => 'getType',
        'selfTradePreventionMode' => 'getSelfTradePreventionMode',
        'updateTime' => 'getUpdateTime',
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
        $this->setIfExists('clientOrderId', $data ?? [], null);
        $this->setIfExists('cummulativeQuoteQty', $data ?? [], null);
        $this->setIfExists('executedQty', $data ?? [], null);
        $this->setIfExists('icebergQty', $data ?? [], null);
        $this->setIfExists('isWorking', $data ?? [], null);
        $this->setIfExists('orderId', $data ?? [], null);
        $this->setIfExists('origQty', $data ?? [], null);
        $this->setIfExists('price', $data ?? [], null);
        $this->setIfExists('side', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('stopPrice', $data ?? [], null);
        $this->setIfExists('symbol', $data ?? [], null);
        $this->setIfExists('isIsolated', $data ?? [], null);
        $this->setIfExists('time', $data ?? [], null);
        $this->setIfExists('timeInForce', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('selfTradePreventionMode', $data ?? [], null);
        $this->setIfExists('updateTime', $data ?? [], null);
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
     * Gets clientOrderId.
     *
     * @return null|string
     */
    public function getClientOrderId()
    {
        return $this->container['clientOrderId'];
    }

    /**
     * Sets clientOrderId.
     *
     * @param null|string $clientOrderId clientOrderId
     *
     * @return self
     */
    public function setClientOrderId($clientOrderId)
    {
        if (is_null($clientOrderId)) {
            throw new \InvalidArgumentException('non-nullable clientOrderId cannot be null');
        }
        $this->container['clientOrderId'] = $clientOrderId;

        return $this;
    }

    /**
     * Gets cummulativeQuoteQty.
     *
     * @return null|string
     */
    public function getCummulativeQuoteQty()
    {
        return $this->container['cummulativeQuoteQty'];
    }

    /**
     * Sets cummulativeQuoteQty.
     *
     * @param null|string $cummulativeQuoteQty cummulativeQuoteQty
     *
     * @return self
     */
    public function setCummulativeQuoteQty($cummulativeQuoteQty)
    {
        if (is_null($cummulativeQuoteQty)) {
            throw new \InvalidArgumentException('non-nullable cummulativeQuoteQty cannot be null');
        }
        $this->container['cummulativeQuoteQty'] = $cummulativeQuoteQty;

        return $this;
    }

    /**
     * Gets executedQty.
     *
     * @return null|string
     */
    public function getExecutedQty()
    {
        return $this->container['executedQty'];
    }

    /**
     * Sets executedQty.
     *
     * @param null|string $executedQty executedQty
     *
     * @return self
     */
    public function setExecutedQty($executedQty)
    {
        if (is_null($executedQty)) {
            throw new \InvalidArgumentException('non-nullable executedQty cannot be null');
        }
        $this->container['executedQty'] = $executedQty;

        return $this;
    }

    /**
     * Gets icebergQty.
     *
     * @return null|string
     */
    public function getIcebergQty()
    {
        return $this->container['icebergQty'];
    }

    /**
     * Sets icebergQty.
     *
     * @param null|string $icebergQty icebergQty
     *
     * @return self
     */
    public function setIcebergQty($icebergQty)
    {
        if (is_null($icebergQty)) {
            throw new \InvalidArgumentException('non-nullable icebergQty cannot be null');
        }
        $this->container['icebergQty'] = $icebergQty;

        return $this;
    }

    /**
     * Gets isWorking.
     *
     * @return null|bool
     */
    public function getIsWorking()
    {
        return $this->container['isWorking'];
    }

    /**
     * Sets isWorking.
     *
     * @param null|bool $isWorking isWorking
     *
     * @return self
     */
    public function setIsWorking($isWorking)
    {
        if (is_null($isWorking)) {
            throw new \InvalidArgumentException('non-nullable isWorking cannot be null');
        }
        $this->container['isWorking'] = $isWorking;

        return $this;
    }

    /**
     * Gets orderId.
     *
     * @return null|int
     */
    public function getOrderId()
    {
        return $this->container['orderId'];
    }

    /**
     * Sets orderId.
     *
     * @param null|int $orderId orderId
     *
     * @return self
     */
    public function setOrderId($orderId)
    {
        if (is_null($orderId)) {
            throw new \InvalidArgumentException('non-nullable orderId cannot be null');
        }
        $this->container['orderId'] = $orderId;

        return $this;
    }

    /**
     * Gets origQty.
     *
     * @return null|string
     */
    public function getOrigQty()
    {
        return $this->container['origQty'];
    }

    /**
     * Sets origQty.
     *
     * @param null|string $origQty origQty
     *
     * @return self
     */
    public function setOrigQty($origQty)
    {
        if (is_null($origQty)) {
            throw new \InvalidArgumentException('non-nullable origQty cannot be null');
        }
        $this->container['origQty'] = $origQty;

        return $this;
    }

    /**
     * Gets price.
     *
     * @return null|string
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price.
     *
     * @param null|string $price price
     *
     * @return self
     */
    public function setPrice($price)
    {
        if (is_null($price)) {
            throw new \InvalidArgumentException('non-nullable price cannot be null');
        }
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets side.
     *
     * @return null|string
     */
    public function getSide()
    {
        return $this->container['side'];
    }

    /**
     * Sets side.
     *
     * @param null|string $side side
     *
     * @return self
     */
    public function setSide($side)
    {
        if (is_null($side)) {
            throw new \InvalidArgumentException('non-nullable side cannot be null');
        }
        $this->container['side'] = $side;

        return $this;
    }

    /**
     * Gets status.
     *
     * @return null|string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status.
     *
     * @param null|string $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets stopPrice.
     *
     * @return null|string
     */
    public function getStopPrice()
    {
        return $this->container['stopPrice'];
    }

    /**
     * Sets stopPrice.
     *
     * @param null|string $stopPrice stopPrice
     *
     * @return self
     */
    public function setStopPrice($stopPrice)
    {
        if (is_null($stopPrice)) {
            throw new \InvalidArgumentException('non-nullable stopPrice cannot be null');
        }
        $this->container['stopPrice'] = $stopPrice;

        return $this;
    }

    /**
     * Gets symbol.
     *
     * @return null|string
     */
    public function getSymbol()
    {
        return $this->container['symbol'];
    }

    /**
     * Sets symbol.
     *
     * @param null|string $symbol symbol
     *
     * @return self
     */
    public function setSymbol($symbol)
    {
        if (is_null($symbol)) {
            throw new \InvalidArgumentException('non-nullable symbol cannot be null');
        }
        $this->container['symbol'] = $symbol;

        return $this;
    }

    /**
     * Gets isIsolated.
     *
     * @return null|bool
     */
    public function getIsIsolated()
    {
        return $this->container['isIsolated'];
    }

    /**
     * Sets isIsolated.
     *
     * @param null|bool $isIsolated isIsolated
     *
     * @return self
     */
    public function setIsIsolated($isIsolated)
    {
        if (is_null($isIsolated)) {
            throw new \InvalidArgumentException('non-nullable isIsolated cannot be null');
        }
        $this->container['isIsolated'] = $isIsolated;

        return $this;
    }

    /**
     * Gets time.
     *
     * @return null|int
     */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
     * Sets time.
     *
     * @param null|int $time time
     *
     * @return self
     */
    public function setTime($time)
    {
        if (is_null($time)) {
            throw new \InvalidArgumentException('non-nullable time cannot be null');
        }
        $this->container['time'] = $time;

        return $this;
    }

    /**
     * Gets timeInForce.
     *
     * @return null|string
     */
    public function getTimeInForce()
    {
        return $this->container['timeInForce'];
    }

    /**
     * Sets timeInForce.
     *
     * @param null|string $timeInForce timeInForce
     *
     * @return self
     */
    public function setTimeInForce($timeInForce)
    {
        if (is_null($timeInForce)) {
            throw new \InvalidArgumentException('non-nullable timeInForce cannot be null');
        }
        $this->container['timeInForce'] = $timeInForce;

        return $this;
    }

    /**
     * Gets type.
     *
     * @return null|string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type.
     *
     * @param null|string $type type
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets selfTradePreventionMode.
     *
     * @return null|string
     */
    public function getSelfTradePreventionMode()
    {
        return $this->container['selfTradePreventionMode'];
    }

    /**
     * Sets selfTradePreventionMode.
     *
     * @param null|string $selfTradePreventionMode selfTradePreventionMode
     *
     * @return self
     */
    public function setSelfTradePreventionMode($selfTradePreventionMode)
    {
        if (is_null($selfTradePreventionMode)) {
            throw new \InvalidArgumentException('non-nullable selfTradePreventionMode cannot be null');
        }
        $this->container['selfTradePreventionMode'] = $selfTradePreventionMode;

        return $this;
    }

    /**
     * Gets updateTime.
     *
     * @return null|int
     */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
     * Sets updateTime.
     *
     * @param null|int $updateTime updateTime
     *
     * @return self
     */
    public function setUpdateTime($updateTime)
    {
        if (is_null($updateTime)) {
            throw new \InvalidArgumentException('non-nullable updateTime cannot be null');
        }
        $this->container['updateTime'] = $updateTime;

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

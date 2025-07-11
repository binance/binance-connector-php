<?php

/**
 * NewOrderRequest.
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
 * Binance Spot REST API.
 *
 * OpenAPI Specifications for the Binance Spot REST API  API documents:   - [Github rest-api documentation file](https://github.com/binance/binance-spot-api-docs/blob/master/rest-api.md)   - [General API information for rest-api on website](https://developers.binance.com/docs/binance-spot-api-docs/rest-api/general-api-information)
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

namespace Binance\Client\Spot\Model;

use Binance\Common\Dtos\ModelInterface;
use Binance\Common\ObjectSerializer;

/**
 * NewOrderRequest Class Doc Comment.
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 *
 * @implements \ArrayAccess<string, mixed>
 */
class NewOrderRequest implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'newOrderRequest';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'symbol' => 'string',
        'side' => '\Binance\Client\Spot\Model\Side',
        'type' => '\Binance\Client\Spot\Model\OrderType',
        'timeInForce' => '\Binance\Client\Spot\Model\TimeInForce',
        'quantity' => 'float',
        'quoteOrderQty' => 'float',
        'price' => 'float',
        'newClientOrderId' => 'string',
        'strategyId' => 'int',
        'strategyType' => 'int',
        'stopPrice' => 'float',
        'trailingDelta' => 'int',
        'icebergQty' => 'float',
        'newOrderRespType' => '\Binance\Client\Spot\Model\NewOrderRespType',
        'selfTradePreventionMode' => '\Binance\Client\Spot\Model\SelfTradePreventionMode',
        'recvWindow' => 'int',
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
        'symbol' => null,
        'side' => null,
        'type' => null,
        'timeInForce' => null,
        'quantity' => 'float',
        'quoteOrderQty' => 'float',
        'price' => 'float',
        'newClientOrderId' => null,
        'strategyId' => 'int64',
        'strategyType' => null,
        'stopPrice' => 'float',
        'trailingDelta' => 'int64',
        'icebergQty' => 'float',
        'newOrderRespType' => null,
        'selfTradePreventionMode' => null,
        'recvWindow' => 'int64',
    ];

    /**
     * Array of nullable properties. Used for (de)serialization.
     *
     * @var bool[]
     */
    protected static array $openAPINullables = [
        'symbol' => false,
        'side' => false,
        'type' => false,
        'timeInForce' => false,
        'quantity' => false,
        'quoteOrderQty' => false,
        'price' => false,
        'newClientOrderId' => false,
        'strategyId' => false,
        'strategyType' => false,
        'stopPrice' => false,
        'trailingDelta' => false,
        'icebergQty' => false,
        'newOrderRespType' => false,
        'selfTradePreventionMode' => false,
        'recvWindow' => false,
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
        'symbol' => 'symbol',
        'side' => 'side',
        'type' => 'type',
        'timeInForce' => 'timeInForce',
        'quantity' => 'quantity',
        'quoteOrderQty' => 'quoteOrderQty',
        'price' => 'price',
        'newClientOrderId' => 'newClientOrderId',
        'strategyId' => 'strategyId',
        'strategyType' => 'strategyType',
        'stopPrice' => 'stopPrice',
        'trailingDelta' => 'trailingDelta',
        'icebergQty' => 'icebergQty',
        'newOrderRespType' => 'newOrderRespType',
        'selfTradePreventionMode' => 'selfTradePreventionMode',
        'recvWindow' => 'recvWindow',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'symbol' => 'setSymbol',
        'side' => 'setSide',
        'type' => 'setType',
        'timeInForce' => 'setTimeInForce',
        'quantity' => 'setQuantity',
        'quoteOrderQty' => 'setQuoteOrderQty',
        'price' => 'setPrice',
        'newClientOrderId' => 'setNewClientOrderId',
        'strategyId' => 'setStrategyId',
        'strategyType' => 'setStrategyType',
        'stopPrice' => 'setStopPrice',
        'trailingDelta' => 'setTrailingDelta',
        'icebergQty' => 'setIcebergQty',
        'newOrderRespType' => 'setNewOrderRespType',
        'selfTradePreventionMode' => 'setSelfTradePreventionMode',
        'recvWindow' => 'setRecvWindow',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'symbol' => 'getSymbol',
        'side' => 'getSide',
        'type' => 'getType',
        'timeInForce' => 'getTimeInForce',
        'quantity' => 'getQuantity',
        'quoteOrderQty' => 'getQuoteOrderQty',
        'price' => 'getPrice',
        'newClientOrderId' => 'getNewClientOrderId',
        'strategyId' => 'getStrategyId',
        'strategyType' => 'getStrategyType',
        'stopPrice' => 'getStopPrice',
        'trailingDelta' => 'getTrailingDelta',
        'icebergQty' => 'getIcebergQty',
        'newOrderRespType' => 'getNewOrderRespType',
        'selfTradePreventionMode' => 'getSelfTradePreventionMode',
        'recvWindow' => 'getRecvWindow',
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
        $this->setIfExists('symbol', $data ?? [], null);
        $this->setIfExists('side', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('timeInForce', $data ?? [], null);
        $this->setIfExists('quantity', $data ?? [], null);
        $this->setIfExists('quoteOrderQty', $data ?? [], null);
        $this->setIfExists('price', $data ?? [], null);
        $this->setIfExists('newClientOrderId', $data ?? [], null);
        $this->setIfExists('strategyId', $data ?? [], null);
        $this->setIfExists('strategyType', $data ?? [], null);
        $this->setIfExists('stopPrice', $data ?? [], null);
        $this->setIfExists('trailingDelta', $data ?? [], null);
        $this->setIfExists('icebergQty', $data ?? [], null);
        $this->setIfExists('newOrderRespType', $data ?? [], null);
        $this->setIfExists('selfTradePreventionMode', $data ?? [], null);
        $this->setIfExists('recvWindow', $data ?? [], null);
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
        $invalidProperties = [];

        if (null === $this->container['symbol']) {
            $invalidProperties[] = "'symbol' can't be null";
        }
        if (null === $this->container['side']) {
            $invalidProperties[] = "'side' can't be null";
        }
        if (null === $this->container['type']) {
            $invalidProperties[] = "'type' can't be null";
        }

        return $invalidProperties;
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
     * Gets symbol.
     *
     * @return string
     */
    public function getSymbol()
    {
        return $this->container['symbol'];
    }

    /**
     * Sets symbol.
     *
     * @param string $symbol symbol
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
     * Gets side.
     *
     * @return Side
     */
    public function getSide()
    {
        return $this->container['side'];
    }

    /**
     * Sets side.
     *
     * @param Side $side side
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
     * Gets type.
     *
     * @return OrderType
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type.
     *
     * @param OrderType $type type
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
     * Gets timeInForce.
     *
     * @return null|TimeInForce
     */
    public function getTimeInForce()
    {
        return $this->container['timeInForce'];
    }

    /**
     * Sets timeInForce.
     *
     * @param null|TimeInForce $timeInForce timeInForce
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
     * Gets quantity.
     *
     * @return null|float
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity.
     *
     * @param null|float $quantity quantity
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        if (is_null($quantity)) {
            throw new \InvalidArgumentException('non-nullable quantity cannot be null');
        }
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets quoteOrderQty.
     *
     * @return null|float
     */
    public function getQuoteOrderQty()
    {
        return $this->container['quoteOrderQty'];
    }

    /**
     * Sets quoteOrderQty.
     *
     * @param null|float $quoteOrderQty quoteOrderQty
     *
     * @return self
     */
    public function setQuoteOrderQty($quoteOrderQty)
    {
        if (is_null($quoteOrderQty)) {
            throw new \InvalidArgumentException('non-nullable quoteOrderQty cannot be null');
        }
        $this->container['quoteOrderQty'] = $quoteOrderQty;

        return $this;
    }

    /**
     * Gets price.
     *
     * @return null|float
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price.
     *
     * @param null|float $price price
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
     * Gets newClientOrderId.
     *
     * @return null|string
     */
    public function getNewClientOrderId()
    {
        return $this->container['newClientOrderId'];
    }

    /**
     * Sets newClientOrderId.
     *
     * @param null|string $newClientOrderId newClientOrderId
     *
     * @return self
     */
    public function setNewClientOrderId($newClientOrderId)
    {
        if (is_null($newClientOrderId)) {
            throw new \InvalidArgumentException('non-nullable newClientOrderId cannot be null');
        }
        $this->container['newClientOrderId'] = $newClientOrderId;

        return $this;
    }

    /**
     * Gets strategyId.
     *
     * @return null|int
     */
    public function getStrategyId()
    {
        return $this->container['strategyId'];
    }

    /**
     * Sets strategyId.
     *
     * @param null|int $strategyId strategyId
     *
     * @return self
     */
    public function setStrategyId($strategyId)
    {
        if (is_null($strategyId)) {
            throw new \InvalidArgumentException('non-nullable strategyId cannot be null');
        }
        $this->container['strategyId'] = $strategyId;

        return $this;
    }

    /**
     * Gets strategyType.
     *
     * @return null|int
     */
    public function getStrategyType()
    {
        return $this->container['strategyType'];
    }

    /**
     * Sets strategyType.
     *
     * @param null|int $strategyType strategyType
     *
     * @return self
     */
    public function setStrategyType($strategyType)
    {
        if (is_null($strategyType)) {
            throw new \InvalidArgumentException('non-nullable strategyType cannot be null');
        }
        $this->container['strategyType'] = $strategyType;

        return $this;
    }

    /**
     * Gets stopPrice.
     *
     * @return null|float
     */
    public function getStopPrice()
    {
        return $this->container['stopPrice'];
    }

    /**
     * Sets stopPrice.
     *
     * @param null|float $stopPrice stopPrice
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
     * Gets trailingDelta.
     *
     * @return null|int
     */
    public function getTrailingDelta()
    {
        return $this->container['trailingDelta'];
    }

    /**
     * Sets trailingDelta.
     *
     * @param null|int $trailingDelta trailingDelta
     *
     * @return self
     */
    public function setTrailingDelta($trailingDelta)
    {
        if (is_null($trailingDelta)) {
            throw new \InvalidArgumentException('non-nullable trailingDelta cannot be null');
        }
        $this->container['trailingDelta'] = $trailingDelta;

        return $this;
    }

    /**
     * Gets icebergQty.
     *
     * @return null|float
     */
    public function getIcebergQty()
    {
        return $this->container['icebergQty'];
    }

    /**
     * Sets icebergQty.
     *
     * @param null|float $icebergQty icebergQty
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
     * Gets newOrderRespType.
     *
     * @return null|NewOrderRespType
     */
    public function getNewOrderRespType()
    {
        return $this->container['newOrderRespType'];
    }

    /**
     * Sets newOrderRespType.
     *
     * @param null|NewOrderRespType $newOrderRespType newOrderRespType
     *
     * @return self
     */
    public function setNewOrderRespType($newOrderRespType)
    {
        if (is_null($newOrderRespType)) {
            throw new \InvalidArgumentException('non-nullable newOrderRespType cannot be null');
        }
        $this->container['newOrderRespType'] = $newOrderRespType;

        return $this;
    }

    /**
     * Gets selfTradePreventionMode.
     *
     * @return null|SelfTradePreventionMode
     */
    public function getSelfTradePreventionMode()
    {
        return $this->container['selfTradePreventionMode'];
    }

    /**
     * Sets selfTradePreventionMode.
     *
     * @param null|SelfTradePreventionMode $selfTradePreventionMode selfTradePreventionMode
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
     * Gets recvWindow.
     *
     * @return null|int
     */
    public function getRecvWindow()
    {
        return $this->container['recvWindow'];
    }

    /**
     * Sets recvWindow.
     *
     * @param null|int $recvWindow recvWindow
     *
     * @return self
     */
    public function setRecvWindow($recvWindow)
    {
        if (is_null($recvWindow)) {
            throw new \InvalidArgumentException('non-nullable recvWindow cannot be null');
        }
        $this->container['recvWindow'] = $recvWindow;

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

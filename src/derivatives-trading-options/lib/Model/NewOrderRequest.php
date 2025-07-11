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
        'side' => '\Binance\Client\DerivativesTradingOptions\Model\Side',
        'type' => '\Binance\Client\DerivativesTradingOptions\Model\Type',
        'quantity' => 'float',
        'price' => 'float',
        'timeInForce' => '\Binance\Client\DerivativesTradingOptions\Model\TimeInForce',
        'reduceOnly' => 'bool',
        'postOnly' => 'bool',
        'newOrderRespType' => '\Binance\Client\DerivativesTradingOptions\Model\NewOrderRespType',
        'clientOrderId' => 'string',
        'isMmp' => 'bool',
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
        'quantity' => 'float',
        'price' => 'float',
        'timeInForce' => null,
        'reduceOnly' => null,
        'postOnly' => null,
        'newOrderRespType' => null,
        'clientOrderId' => null,
        'isMmp' => null,
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
        'quantity' => false,
        'price' => false,
        'timeInForce' => false,
        'reduceOnly' => false,
        'postOnly' => false,
        'newOrderRespType' => false,
        'clientOrderId' => false,
        'isMmp' => false,
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
        'quantity' => 'quantity',
        'price' => 'price',
        'timeInForce' => 'timeInForce',
        'reduceOnly' => 'reduceOnly',
        'postOnly' => 'postOnly',
        'newOrderRespType' => 'newOrderRespType',
        'clientOrderId' => 'clientOrderId',
        'isMmp' => 'isMmp',
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
        'quantity' => 'setQuantity',
        'price' => 'setPrice',
        'timeInForce' => 'setTimeInForce',
        'reduceOnly' => 'setReduceOnly',
        'postOnly' => 'setPostOnly',
        'newOrderRespType' => 'setNewOrderRespType',
        'clientOrderId' => 'setClientOrderId',
        'isMmp' => 'setIsMmp',
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
        'quantity' => 'getQuantity',
        'price' => 'getPrice',
        'timeInForce' => 'getTimeInForce',
        'reduceOnly' => 'getReduceOnly',
        'postOnly' => 'getPostOnly',
        'newOrderRespType' => 'getNewOrderRespType',
        'clientOrderId' => 'getClientOrderId',
        'isMmp' => 'getIsMmp',
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
        $this->setIfExists('quantity', $data ?? [], null);
        $this->setIfExists('price', $data ?? [], null);
        $this->setIfExists('timeInForce', $data ?? [], null);
        $this->setIfExists('reduceOnly', $data ?? [], null);
        $this->setIfExists('postOnly', $data ?? [], null);
        $this->setIfExists('newOrderRespType', $data ?? [], null);
        $this->setIfExists('clientOrderId', $data ?? [], null);
        $this->setIfExists('isMmp', $data ?? [], null);
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
        if (null === $this->container['quantity']) {
            $invalidProperties[] = "'quantity' can't be null";
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
     * @return Type
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type.
     *
     * @param Type $type type
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
     * Gets quantity.
     *
     * @return float
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity.
     *
     * @param float $quantity quantity
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
     * Gets reduceOnly.
     *
     * @return null|bool
     */
    public function getReduceOnly()
    {
        return $this->container['reduceOnly'];
    }

    /**
     * Sets reduceOnly.
     *
     * @param null|bool $reduceOnly reduceOnly
     *
     * @return self
     */
    public function setReduceOnly($reduceOnly)
    {
        if (is_null($reduceOnly)) {
            throw new \InvalidArgumentException('non-nullable reduceOnly cannot be null');
        }
        $this->container['reduceOnly'] = $reduceOnly;

        return $this;
    }

    /**
     * Gets postOnly.
     *
     * @return null|bool
     */
    public function getPostOnly()
    {
        return $this->container['postOnly'];
    }

    /**
     * Sets postOnly.
     *
     * @param null|bool $postOnly postOnly
     *
     * @return self
     */
    public function setPostOnly($postOnly)
    {
        if (is_null($postOnly)) {
            throw new \InvalidArgumentException('non-nullable postOnly cannot be null');
        }
        $this->container['postOnly'] = $postOnly;

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
     * Gets isMmp.
     *
     * @return null|bool
     */
    public function getIsMmp()
    {
        return $this->container['isMmp'];
    }

    /**
     * Sets isMmp.
     *
     * @param null|bool $isMmp isMmp
     *
     * @return self
     */
    public function setIsMmp($isMmp)
    {
        if (is_null($isMmp)) {
            throw new \InvalidArgumentException('non-nullable isMmp cannot be null');
        }
        $this->container['isMmp'] = $isMmp;

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

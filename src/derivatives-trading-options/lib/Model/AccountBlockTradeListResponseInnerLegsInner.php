<?php

/**
 * AccountBlockTradeListResponseInnerLegsInner.
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
 * AccountBlockTradeListResponseInnerLegsInner Class Doc Comment.
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 *
 * @implements \ArrayAccess<string, mixed>
 */
class AccountBlockTradeListResponseInnerLegsInner implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'accountBlockTradeListResponse_inner_legs_inner';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'createTime' => 'int',
        'updateTime' => 'int',
        'symbol' => 'string',
        'orderId' => 'string',
        'orderPrice' => 'float',
        'orderQuantity' => 'float',
        'orderStatus' => 'string',
        'executedQty' => 'float',
        'executedAmount' => 'float',
        'fee' => 'float',
        'orderType' => 'string',
        'orderSide' => 'string',
        'id' => 'string',
        'tradeId' => 'int',
        'tradePrice' => 'float',
        'tradeQty' => 'float',
        'tradeTime' => 'int',
        'liquidity' => 'string',
        'commission' => 'float',
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
        'createTime' => 'int64',
        'updateTime' => 'int64',
        'symbol' => null,
        'orderId' => null,
        'orderPrice' => 'float',
        'orderQuantity' => 'float',
        'orderStatus' => null,
        'executedQty' => 'float',
        'executedAmount' => 'float',
        'fee' => 'float',
        'orderType' => null,
        'orderSide' => null,
        'id' => null,
        'tradeId' => 'int64',
        'tradePrice' => 'float',
        'tradeQty' => 'float',
        'tradeTime' => 'int64',
        'liquidity' => null,
        'commission' => 'float',
    ];

    /**
     * Array of nullable properties. Used for (de)serialization.
     *
     * @var bool[]
     */
    protected static array $openAPINullables = [
        'createTime' => false,
        'updateTime' => false,
        'symbol' => false,
        'orderId' => false,
        'orderPrice' => false,
        'orderQuantity' => false,
        'orderStatus' => false,
        'executedQty' => false,
        'executedAmount' => false,
        'fee' => false,
        'orderType' => false,
        'orderSide' => false,
        'id' => false,
        'tradeId' => false,
        'tradePrice' => false,
        'tradeQty' => false,
        'tradeTime' => false,
        'liquidity' => false,
        'commission' => false,
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
        'createTime' => 'createTime',
        'updateTime' => 'updateTime',
        'symbol' => 'symbol',
        'orderId' => 'orderId',
        'orderPrice' => 'orderPrice',
        'orderQuantity' => 'orderQuantity',
        'orderStatus' => 'orderStatus',
        'executedQty' => 'executedQty',
        'executedAmount' => 'executedAmount',
        'fee' => 'fee',
        'orderType' => 'orderType',
        'orderSide' => 'orderSide',
        'id' => 'id',
        'tradeId' => 'tradeId',
        'tradePrice' => 'tradePrice',
        'tradeQty' => 'tradeQty',
        'tradeTime' => 'tradeTime',
        'liquidity' => 'liquidity',
        'commission' => 'commission',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'createTime' => 'setCreateTime',
        'updateTime' => 'setUpdateTime',
        'symbol' => 'setSymbol',
        'orderId' => 'setOrderId',
        'orderPrice' => 'setOrderPrice',
        'orderQuantity' => 'setOrderQuantity',
        'orderStatus' => 'setOrderStatus',
        'executedQty' => 'setExecutedQty',
        'executedAmount' => 'setExecutedAmount',
        'fee' => 'setFee',
        'orderType' => 'setOrderType',
        'orderSide' => 'setOrderSide',
        'id' => 'setId',
        'tradeId' => 'setTradeId',
        'tradePrice' => 'setTradePrice',
        'tradeQty' => 'setTradeQty',
        'tradeTime' => 'setTradeTime',
        'liquidity' => 'setLiquidity',
        'commission' => 'setCommission',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'createTime' => 'getCreateTime',
        'updateTime' => 'getUpdateTime',
        'symbol' => 'getSymbol',
        'orderId' => 'getOrderId',
        'orderPrice' => 'getOrderPrice',
        'orderQuantity' => 'getOrderQuantity',
        'orderStatus' => 'getOrderStatus',
        'executedQty' => 'getExecutedQty',
        'executedAmount' => 'getExecutedAmount',
        'fee' => 'getFee',
        'orderType' => 'getOrderType',
        'orderSide' => 'getOrderSide',
        'id' => 'getId',
        'tradeId' => 'getTradeId',
        'tradePrice' => 'getTradePrice',
        'tradeQty' => 'getTradeQty',
        'tradeTime' => 'getTradeTime',
        'liquidity' => 'getLiquidity',
        'commission' => 'getCommission',
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
        $this->setIfExists('createTime', $data ?? [], null);
        $this->setIfExists('updateTime', $data ?? [], null);
        $this->setIfExists('symbol', $data ?? [], null);
        $this->setIfExists('orderId', $data ?? [], null);
        $this->setIfExists('orderPrice', $data ?? [], null);
        $this->setIfExists('orderQuantity', $data ?? [], null);
        $this->setIfExists('orderStatus', $data ?? [], null);
        $this->setIfExists('executedQty', $data ?? [], null);
        $this->setIfExists('executedAmount', $data ?? [], null);
        $this->setIfExists('fee', $data ?? [], null);
        $this->setIfExists('orderType', $data ?? [], null);
        $this->setIfExists('orderSide', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('tradeId', $data ?? [], null);
        $this->setIfExists('tradePrice', $data ?? [], null);
        $this->setIfExists('tradeQty', $data ?? [], null);
        $this->setIfExists('tradeTime', $data ?? [], null);
        $this->setIfExists('liquidity', $data ?? [], null);
        $this->setIfExists('commission', $data ?? [], null);
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
     * Gets createTime.
     *
     * @return null|int
     */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
     * Sets createTime.
     *
     * @param null|int $createTime createTime
     *
     * @return self
     */
    public function setCreateTime($createTime)
    {
        if (is_null($createTime)) {
            throw new \InvalidArgumentException('non-nullable createTime cannot be null');
        }
        $this->container['createTime'] = $createTime;

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
     * Gets orderId.
     *
     * @return null|string
     */
    public function getOrderId()
    {
        return $this->container['orderId'];
    }

    /**
     * Sets orderId.
     *
     * @param null|string $orderId orderId
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
     * Gets orderPrice.
     *
     * @return null|float
     */
    public function getOrderPrice()
    {
        return $this->container['orderPrice'];
    }

    /**
     * Sets orderPrice.
     *
     * @param null|float $orderPrice orderPrice
     *
     * @return self
     */
    public function setOrderPrice($orderPrice)
    {
        if (is_null($orderPrice)) {
            throw new \InvalidArgumentException('non-nullable orderPrice cannot be null');
        }
        $this->container['orderPrice'] = $orderPrice;

        return $this;
    }

    /**
     * Gets orderQuantity.
     *
     * @return null|float
     */
    public function getOrderQuantity()
    {
        return $this->container['orderQuantity'];
    }

    /**
     * Sets orderQuantity.
     *
     * @param null|float $orderQuantity orderQuantity
     *
     * @return self
     */
    public function setOrderQuantity($orderQuantity)
    {
        if (is_null($orderQuantity)) {
            throw new \InvalidArgumentException('non-nullable orderQuantity cannot be null');
        }
        $this->container['orderQuantity'] = $orderQuantity;

        return $this;
    }

    /**
     * Gets orderStatus.
     *
     * @return null|string
     */
    public function getOrderStatus()
    {
        return $this->container['orderStatus'];
    }

    /**
     * Sets orderStatus.
     *
     * @param null|string $orderStatus orderStatus
     *
     * @return self
     */
    public function setOrderStatus($orderStatus)
    {
        if (is_null($orderStatus)) {
            throw new \InvalidArgumentException('non-nullable orderStatus cannot be null');
        }
        $this->container['orderStatus'] = $orderStatus;

        return $this;
    }

    /**
     * Gets executedQty.
     *
     * @return null|float
     */
    public function getExecutedQty()
    {
        return $this->container['executedQty'];
    }

    /**
     * Sets executedQty.
     *
     * @param null|float $executedQty executedQty
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
     * Gets executedAmount.
     *
     * @return null|float
     */
    public function getExecutedAmount()
    {
        return $this->container['executedAmount'];
    }

    /**
     * Sets executedAmount.
     *
     * @param null|float $executedAmount executedAmount
     *
     * @return self
     */
    public function setExecutedAmount($executedAmount)
    {
        if (is_null($executedAmount)) {
            throw new \InvalidArgumentException('non-nullable executedAmount cannot be null');
        }
        $this->container['executedAmount'] = $executedAmount;

        return $this;
    }

    /**
     * Gets fee.
     *
     * @return null|float
     */
    public function getFee()
    {
        return $this->container['fee'];
    }

    /**
     * Sets fee.
     *
     * @param null|float $fee fee
     *
     * @return self
     */
    public function setFee($fee)
    {
        if (is_null($fee)) {
            throw new \InvalidArgumentException('non-nullable fee cannot be null');
        }
        $this->container['fee'] = $fee;

        return $this;
    }

    /**
     * Gets orderType.
     *
     * @return null|string
     */
    public function getOrderType()
    {
        return $this->container['orderType'];
    }

    /**
     * Sets orderType.
     *
     * @param null|string $orderType orderType
     *
     * @return self
     */
    public function setOrderType($orderType)
    {
        if (is_null($orderType)) {
            throw new \InvalidArgumentException('non-nullable orderType cannot be null');
        }
        $this->container['orderType'] = $orderType;

        return $this;
    }

    /**
     * Gets orderSide.
     *
     * @return null|string
     */
    public function getOrderSide()
    {
        return $this->container['orderSide'];
    }

    /**
     * Sets orderSide.
     *
     * @param null|string $orderSide orderSide
     *
     * @return self
     */
    public function setOrderSide($orderSide)
    {
        if (is_null($orderSide)) {
            throw new \InvalidArgumentException('non-nullable orderSide cannot be null');
        }
        $this->container['orderSide'] = $orderSide;

        return $this;
    }

    /**
     * Gets id.
     *
     * @return null|string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id.
     *
     * @param null|string $id id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets tradeId.
     *
     * @return null|int
     */
    public function getTradeId()
    {
        return $this->container['tradeId'];
    }

    /**
     * Sets tradeId.
     *
     * @param null|int $tradeId tradeId
     *
     * @return self
     */
    public function setTradeId($tradeId)
    {
        if (is_null($tradeId)) {
            throw new \InvalidArgumentException('non-nullable tradeId cannot be null');
        }
        $this->container['tradeId'] = $tradeId;

        return $this;
    }

    /**
     * Gets tradePrice.
     *
     * @return null|float
     */
    public function getTradePrice()
    {
        return $this->container['tradePrice'];
    }

    /**
     * Sets tradePrice.
     *
     * @param null|float $tradePrice tradePrice
     *
     * @return self
     */
    public function setTradePrice($tradePrice)
    {
        if (is_null($tradePrice)) {
            throw new \InvalidArgumentException('non-nullable tradePrice cannot be null');
        }
        $this->container['tradePrice'] = $tradePrice;

        return $this;
    }

    /**
     * Gets tradeQty.
     *
     * @return null|float
     */
    public function getTradeQty()
    {
        return $this->container['tradeQty'];
    }

    /**
     * Sets tradeQty.
     *
     * @param null|float $tradeQty tradeQty
     *
     * @return self
     */
    public function setTradeQty($tradeQty)
    {
        if (is_null($tradeQty)) {
            throw new \InvalidArgumentException('non-nullable tradeQty cannot be null');
        }
        $this->container['tradeQty'] = $tradeQty;

        return $this;
    }

    /**
     * Gets tradeTime.
     *
     * @return null|int
     */
    public function getTradeTime()
    {
        return $this->container['tradeTime'];
    }

    /**
     * Sets tradeTime.
     *
     * @param null|int $tradeTime tradeTime
     *
     * @return self
     */
    public function setTradeTime($tradeTime)
    {
        if (is_null($tradeTime)) {
            throw new \InvalidArgumentException('non-nullable tradeTime cannot be null');
        }
        $this->container['tradeTime'] = $tradeTime;

        return $this;
    }

    /**
     * Gets liquidity.
     *
     * @return null|string
     */
    public function getLiquidity()
    {
        return $this->container['liquidity'];
    }

    /**
     * Sets liquidity.
     *
     * @param null|string $liquidity liquidity
     *
     * @return self
     */
    public function setLiquidity($liquidity)
    {
        if (is_null($liquidity)) {
            throw new \InvalidArgumentException('non-nullable liquidity cannot be null');
        }
        $this->container['liquidity'] = $liquidity;

        return $this;
    }

    /**
     * Gets commission.
     *
     * @return null|float
     */
    public function getCommission()
    {
        return $this->container['commission'];
    }

    /**
     * Sets commission.
     *
     * @param null|float $commission commission
     *
     * @return self
     */
    public function setCommission($commission)
    {
        if (is_null($commission)) {
            throw new \InvalidArgumentException('non-nullable commission cannot be null');
        }
        $this->container['commission'] = $commission;

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

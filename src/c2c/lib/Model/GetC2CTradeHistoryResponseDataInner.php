<?php

/**
 * GetC2CTradeHistoryResponseDataInner.
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
 * Binance C2C REST API.
 *
 * OpenAPI Specification for the Binance C2C REST API
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

namespace Binance\Client\C2c\Model;

use Binance\Common\Dtos\ModelInterface;
use Binance\Common\ObjectSerializer;

/**
 * GetC2CTradeHistoryResponseDataInner Class Doc Comment.
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 *
 * @implements \ArrayAccess<string, mixed>
 */
class GetC2CTradeHistoryResponseDataInner implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'getC2CTradeHistoryResponse_data_inner';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'orderNumber' => 'string',
        'advNo' => 'string',
        'tradeType' => 'string',
        'asset' => 'string',
        'fiat' => 'string',
        'fiatSymbol' => 'string',
        'amount' => 'string',
        'totalPrice' => 'string',
        'unitPrice' => 'string',
        'orderStatus' => 'string',
        'createTime' => 'int',
        'commission' => 'string',
        'counterPartNickName' => 'string',
        'advertisementRole' => 'string',
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
        'orderNumber' => null,
        'advNo' => null,
        'tradeType' => null,
        'asset' => null,
        'fiat' => null,
        'fiatSymbol' => null,
        'amount' => null,
        'totalPrice' => null,
        'unitPrice' => null,
        'orderStatus' => null,
        'createTime' => 'int64',
        'commission' => null,
        'counterPartNickName' => null,
        'advertisementRole' => null,
    ];

    /**
     * Array of nullable properties. Used for (de)serialization.
     *
     * @var bool[]
     */
    protected static array $openAPINullables = [
        'orderNumber' => false,
        'advNo' => false,
        'tradeType' => false,
        'asset' => false,
        'fiat' => false,
        'fiatSymbol' => false,
        'amount' => false,
        'totalPrice' => false,
        'unitPrice' => false,
        'orderStatus' => false,
        'createTime' => false,
        'commission' => false,
        'counterPartNickName' => false,
        'advertisementRole' => false,
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
        'orderNumber' => 'orderNumber',
        'advNo' => 'advNo',
        'tradeType' => 'tradeType',
        'asset' => 'asset',
        'fiat' => 'fiat',
        'fiatSymbol' => 'fiatSymbol',
        'amount' => 'amount',
        'totalPrice' => 'totalPrice',
        'unitPrice' => 'unitPrice',
        'orderStatus' => 'orderStatus',
        'createTime' => 'createTime',
        'commission' => 'commission',
        'counterPartNickName' => 'counterPartNickName',
        'advertisementRole' => 'advertisementRole',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'orderNumber' => 'setOrderNumber',
        'advNo' => 'setAdvNo',
        'tradeType' => 'setTradeType',
        'asset' => 'setAsset',
        'fiat' => 'setFiat',
        'fiatSymbol' => 'setFiatSymbol',
        'amount' => 'setAmount',
        'totalPrice' => 'setTotalPrice',
        'unitPrice' => 'setUnitPrice',
        'orderStatus' => 'setOrderStatus',
        'createTime' => 'setCreateTime',
        'commission' => 'setCommission',
        'counterPartNickName' => 'setCounterPartNickName',
        'advertisementRole' => 'setAdvertisementRole',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'orderNumber' => 'getOrderNumber',
        'advNo' => 'getAdvNo',
        'tradeType' => 'getTradeType',
        'asset' => 'getAsset',
        'fiat' => 'getFiat',
        'fiatSymbol' => 'getFiatSymbol',
        'amount' => 'getAmount',
        'totalPrice' => 'getTotalPrice',
        'unitPrice' => 'getUnitPrice',
        'orderStatus' => 'getOrderStatus',
        'createTime' => 'getCreateTime',
        'commission' => 'getCommission',
        'counterPartNickName' => 'getCounterPartNickName',
        'advertisementRole' => 'getAdvertisementRole',
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
        $this->setIfExists('orderNumber', $data ?? [], null);
        $this->setIfExists('advNo', $data ?? [], null);
        $this->setIfExists('tradeType', $data ?? [], null);
        $this->setIfExists('asset', $data ?? [], null);
        $this->setIfExists('fiat', $data ?? [], null);
        $this->setIfExists('fiatSymbol', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('totalPrice', $data ?? [], null);
        $this->setIfExists('unitPrice', $data ?? [], null);
        $this->setIfExists('orderStatus', $data ?? [], null);
        $this->setIfExists('createTime', $data ?? [], null);
        $this->setIfExists('commission', $data ?? [], null);
        $this->setIfExists('counterPartNickName', $data ?? [], null);
        $this->setIfExists('advertisementRole', $data ?? [], null);
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
     * Gets orderNumber.
     *
     * @return null|string
     */
    public function getOrderNumber()
    {
        return $this->container['orderNumber'];
    }

    /**
     * Sets orderNumber.
     *
     * @param null|string $orderNumber orderNumber
     *
     * @return self
     */
    public function setOrderNumber($orderNumber)
    {
        if (is_null($orderNumber)) {
            throw new \InvalidArgumentException('non-nullable orderNumber cannot be null');
        }
        $this->container['orderNumber'] = $orderNumber;

        return $this;
    }

    /**
     * Gets advNo.
     *
     * @return null|string
     */
    public function getAdvNo()
    {
        return $this->container['advNo'];
    }

    /**
     * Sets advNo.
     *
     * @param null|string $advNo advNo
     *
     * @return self
     */
    public function setAdvNo($advNo)
    {
        if (is_null($advNo)) {
            throw new \InvalidArgumentException('non-nullable advNo cannot be null');
        }
        $this->container['advNo'] = $advNo;

        return $this;
    }

    /**
     * Gets tradeType.
     *
     * @return null|string
     */
    public function getTradeType()
    {
        return $this->container['tradeType'];
    }

    /**
     * Sets tradeType.
     *
     * @param null|string $tradeType tradeType
     *
     * @return self
     */
    public function setTradeType($tradeType)
    {
        if (is_null($tradeType)) {
            throw new \InvalidArgumentException('non-nullable tradeType cannot be null');
        }
        $this->container['tradeType'] = $tradeType;

        return $this;
    }

    /**
     * Gets asset.
     *
     * @return null|string
     */
    public function getAsset()
    {
        return $this->container['asset'];
    }

    /**
     * Sets asset.
     *
     * @param null|string $asset asset
     *
     * @return self
     */
    public function setAsset($asset)
    {
        if (is_null($asset)) {
            throw new \InvalidArgumentException('non-nullable asset cannot be null');
        }
        $this->container['asset'] = $asset;

        return $this;
    }

    /**
     * Gets fiat.
     *
     * @return null|string
     */
    public function getFiat()
    {
        return $this->container['fiat'];
    }

    /**
     * Sets fiat.
     *
     * @param null|string $fiat fiat
     *
     * @return self
     */
    public function setFiat($fiat)
    {
        if (is_null($fiat)) {
            throw new \InvalidArgumentException('non-nullable fiat cannot be null');
        }
        $this->container['fiat'] = $fiat;

        return $this;
    }

    /**
     * Gets fiatSymbol.
     *
     * @return null|string
     */
    public function getFiatSymbol()
    {
        return $this->container['fiatSymbol'];
    }

    /**
     * Sets fiatSymbol.
     *
     * @param null|string $fiatSymbol fiatSymbol
     *
     * @return self
     */
    public function setFiatSymbol($fiatSymbol)
    {
        if (is_null($fiatSymbol)) {
            throw new \InvalidArgumentException('non-nullable fiatSymbol cannot be null');
        }
        $this->container['fiatSymbol'] = $fiatSymbol;

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
     * Gets totalPrice.
     *
     * @return null|string
     */
    public function getTotalPrice()
    {
        return $this->container['totalPrice'];
    }

    /**
     * Sets totalPrice.
     *
     * @param null|string $totalPrice totalPrice
     *
     * @return self
     */
    public function setTotalPrice($totalPrice)
    {
        if (is_null($totalPrice)) {
            throw new \InvalidArgumentException('non-nullable totalPrice cannot be null');
        }
        $this->container['totalPrice'] = $totalPrice;

        return $this;
    }

    /**
     * Gets unitPrice.
     *
     * @return null|string
     */
    public function getUnitPrice()
    {
        return $this->container['unitPrice'];
    }

    /**
     * Sets unitPrice.
     *
     * @param null|string $unitPrice unitPrice
     *
     * @return self
     */
    public function setUnitPrice($unitPrice)
    {
        if (is_null($unitPrice)) {
            throw new \InvalidArgumentException('non-nullable unitPrice cannot be null');
        }
        $this->container['unitPrice'] = $unitPrice;

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
     * Gets commission.
     *
     * @return null|string
     */
    public function getCommission()
    {
        return $this->container['commission'];
    }

    /**
     * Sets commission.
     *
     * @param null|string $commission commission
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
     * Gets counterPartNickName.
     *
     * @return null|string
     */
    public function getCounterPartNickName()
    {
        return $this->container['counterPartNickName'];
    }

    /**
     * Sets counterPartNickName.
     *
     * @param null|string $counterPartNickName counterPartNickName
     *
     * @return self
     */
    public function setCounterPartNickName($counterPartNickName)
    {
        if (is_null($counterPartNickName)) {
            throw new \InvalidArgumentException('non-nullable counterPartNickName cannot be null');
        }
        $this->container['counterPartNickName'] = $counterPartNickName;

        return $this;
    }

    /**
     * Gets advertisementRole.
     *
     * @return null|string
     */
    public function getAdvertisementRole()
    {
        return $this->container['advertisementRole'];
    }

    /**
     * Sets advertisementRole.
     *
     * @param null|string $advertisementRole advertisementRole
     *
     * @return self
     */
    public function setAdvertisementRole($advertisementRole)
    {
        if (is_null($advertisementRole)) {
            throw new \InvalidArgumentException('non-nullable advertisementRole cannot be null');
        }
        $this->container['advertisementRole'] = $advertisementRole;

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

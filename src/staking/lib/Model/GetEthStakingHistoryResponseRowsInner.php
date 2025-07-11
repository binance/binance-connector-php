<?php

/**
 * GetEthStakingHistoryResponseRowsInner.
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
 * Binance Staking REST API.
 *
 * OpenAPI Specification for the Binance Staking REST API
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

namespace Binance\Client\Staking\Model;

use Binance\Common\Dtos\ModelInterface;
use Binance\Common\ObjectSerializer;

/**
 * GetEthStakingHistoryResponseRowsInner Class Doc Comment.
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 *
 * @implements \ArrayAccess<string, mixed>
 */
class GetEthStakingHistoryResponseRowsInner implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'getEthStakingHistoryResponse_rows_inner';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'time' => 'int',
        'asset' => 'string',
        'amount' => 'string',
        'distributeAsset' => 'string',
        'distributeAmount' => 'string',
        'conversionRatio' => 'string',
        'status' => 'string',
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
        'time' => 'int64',
        'asset' => null,
        'amount' => null,
        'distributeAsset' => null,
        'distributeAmount' => null,
        'conversionRatio' => null,
        'status' => null,
    ];

    /**
     * Array of nullable properties. Used for (de)serialization.
     *
     * @var bool[]
     */
    protected static array $openAPINullables = [
        'time' => false,
        'asset' => false,
        'amount' => false,
        'distributeAsset' => false,
        'distributeAmount' => false,
        'conversionRatio' => false,
        'status' => false,
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
        'time' => 'time',
        'asset' => 'asset',
        'amount' => 'amount',
        'distributeAsset' => 'distributeAsset',
        'distributeAmount' => 'distributeAmount',
        'conversionRatio' => 'conversionRatio',
        'status' => 'status',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'time' => 'setTime',
        'asset' => 'setAsset',
        'amount' => 'setAmount',
        'distributeAsset' => 'setDistributeAsset',
        'distributeAmount' => 'setDistributeAmount',
        'conversionRatio' => 'setConversionRatio',
        'status' => 'setStatus',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'time' => 'getTime',
        'asset' => 'getAsset',
        'amount' => 'getAmount',
        'distributeAsset' => 'getDistributeAsset',
        'distributeAmount' => 'getDistributeAmount',
        'conversionRatio' => 'getConversionRatio',
        'status' => 'getStatus',
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
        $this->setIfExists('time', $data ?? [], null);
        $this->setIfExists('asset', $data ?? [], null);
        $this->setIfExists('amount', $data ?? [], null);
        $this->setIfExists('distributeAsset', $data ?? [], null);
        $this->setIfExists('distributeAmount', $data ?? [], null);
        $this->setIfExists('conversionRatio', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
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
     * Gets distributeAsset.
     *
     * @return null|string
     */
    public function getDistributeAsset()
    {
        return $this->container['distributeAsset'];
    }

    /**
     * Sets distributeAsset.
     *
     * @param null|string $distributeAsset distributeAsset
     *
     * @return self
     */
    public function setDistributeAsset($distributeAsset)
    {
        if (is_null($distributeAsset)) {
            throw new \InvalidArgumentException('non-nullable distributeAsset cannot be null');
        }
        $this->container['distributeAsset'] = $distributeAsset;

        return $this;
    }

    /**
     * Gets distributeAmount.
     *
     * @return null|string
     */
    public function getDistributeAmount()
    {
        return $this->container['distributeAmount'];
    }

    /**
     * Sets distributeAmount.
     *
     * @param null|string $distributeAmount distributeAmount
     *
     * @return self
     */
    public function setDistributeAmount($distributeAmount)
    {
        if (is_null($distributeAmount)) {
            throw new \InvalidArgumentException('non-nullable distributeAmount cannot be null');
        }
        $this->container['distributeAmount'] = $distributeAmount;

        return $this;
    }

    /**
     * Gets conversionRatio.
     *
     * @return null|string
     */
    public function getConversionRatio()
    {
        return $this->container['conversionRatio'];
    }

    /**
     * Sets conversionRatio.
     *
     * @param null|string $conversionRatio conversionRatio
     *
     * @return self
     */
    public function setConversionRatio($conversionRatio)
    {
        if (is_null($conversionRatio)) {
            throw new \InvalidArgumentException('non-nullable conversionRatio cannot be null');
        }
        $this->container['conversionRatio'] = $conversionRatio;

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

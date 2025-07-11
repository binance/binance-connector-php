<?php

/**
 * GetOnChainYieldsLockedProductListResponseRowsInnerDetail.
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
 * GetOnChainYieldsLockedProductListResponseRowsInnerDetail Class Doc Comment.
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 *
 * @implements \ArrayAccess<string, mixed>
 */
class GetOnChainYieldsLockedProductListResponseRowsInnerDetail implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'getOnChainYieldsLockedProductListResponse_rows_inner_detail';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'asset' => 'string',
        'rewardAsset' => 'string',
        'duration' => 'int',
        'renewable' => 'bool',
        'isSoldOut' => 'bool',
        'apr' => 'string',
        'status' => 'string',
        'subscriptionStartTime' => 'string',
        'canRedeemToFlex' => 'bool',
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
        'asset' => null,
        'rewardAsset' => null,
        'duration' => 'int64',
        'renewable' => null,
        'isSoldOut' => null,
        'apr' => null,
        'status' => null,
        'subscriptionStartTime' => null,
        'canRedeemToFlex' => null,
    ];

    /**
     * Array of nullable properties. Used for (de)serialization.
     *
     * @var bool[]
     */
    protected static array $openAPINullables = [
        'asset' => false,
        'rewardAsset' => false,
        'duration' => false,
        'renewable' => false,
        'isSoldOut' => false,
        'apr' => false,
        'status' => false,
        'subscriptionStartTime' => false,
        'canRedeemToFlex' => false,
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
        'asset' => 'asset',
        'rewardAsset' => 'rewardAsset',
        'duration' => 'duration',
        'renewable' => 'renewable',
        'isSoldOut' => 'isSoldOut',
        'apr' => 'apr',
        'status' => 'status',
        'subscriptionStartTime' => 'subscriptionStartTime',
        'canRedeemToFlex' => 'canRedeemToFlex',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'asset' => 'setAsset',
        'rewardAsset' => 'setRewardAsset',
        'duration' => 'setDuration',
        'renewable' => 'setRenewable',
        'isSoldOut' => 'setIsSoldOut',
        'apr' => 'setApr',
        'status' => 'setStatus',
        'subscriptionStartTime' => 'setSubscriptionStartTime',
        'canRedeemToFlex' => 'setCanRedeemToFlex',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'asset' => 'getAsset',
        'rewardAsset' => 'getRewardAsset',
        'duration' => 'getDuration',
        'renewable' => 'getRenewable',
        'isSoldOut' => 'getIsSoldOut',
        'apr' => 'getApr',
        'status' => 'getStatus',
        'subscriptionStartTime' => 'getSubscriptionStartTime',
        'canRedeemToFlex' => 'getCanRedeemToFlex',
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
        $this->setIfExists('asset', $data ?? [], null);
        $this->setIfExists('rewardAsset', $data ?? [], null);
        $this->setIfExists('duration', $data ?? [], null);
        $this->setIfExists('renewable', $data ?? [], null);
        $this->setIfExists('isSoldOut', $data ?? [], null);
        $this->setIfExists('apr', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('subscriptionStartTime', $data ?? [], null);
        $this->setIfExists('canRedeemToFlex', $data ?? [], null);
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
     * Gets rewardAsset.
     *
     * @return null|string
     */
    public function getRewardAsset()
    {
        return $this->container['rewardAsset'];
    }

    /**
     * Sets rewardAsset.
     *
     * @param null|string $rewardAsset rewardAsset
     *
     * @return self
     */
    public function setRewardAsset($rewardAsset)
    {
        if (is_null($rewardAsset)) {
            throw new \InvalidArgumentException('non-nullable rewardAsset cannot be null');
        }
        $this->container['rewardAsset'] = $rewardAsset;

        return $this;
    }

    /**
     * Gets duration.
     *
     * @return null|int
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration.
     *
     * @param null|int $duration duration
     *
     * @return self
     */
    public function setDuration($duration)
    {
        if (is_null($duration)) {
            throw new \InvalidArgumentException('non-nullable duration cannot be null');
        }
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets renewable.
     *
     * @return null|bool
     */
    public function getRenewable()
    {
        return $this->container['renewable'];
    }

    /**
     * Sets renewable.
     *
     * @param null|bool $renewable renewable
     *
     * @return self
     */
    public function setRenewable($renewable)
    {
        if (is_null($renewable)) {
            throw new \InvalidArgumentException('non-nullable renewable cannot be null');
        }
        $this->container['renewable'] = $renewable;

        return $this;
    }

    /**
     * Gets isSoldOut.
     *
     * @return null|bool
     */
    public function getIsSoldOut()
    {
        return $this->container['isSoldOut'];
    }

    /**
     * Sets isSoldOut.
     *
     * @param null|bool $isSoldOut isSoldOut
     *
     * @return self
     */
    public function setIsSoldOut($isSoldOut)
    {
        if (is_null($isSoldOut)) {
            throw new \InvalidArgumentException('non-nullable isSoldOut cannot be null');
        }
        $this->container['isSoldOut'] = $isSoldOut;

        return $this;
    }

    /**
     * Gets apr.
     *
     * @return null|string
     */
    public function getApr()
    {
        return $this->container['apr'];
    }

    /**
     * Sets apr.
     *
     * @param null|string $apr apr
     *
     * @return self
     */
    public function setApr($apr)
    {
        if (is_null($apr)) {
            throw new \InvalidArgumentException('non-nullable apr cannot be null');
        }
        $this->container['apr'] = $apr;

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
     * Gets subscriptionStartTime.
     *
     * @return null|string
     */
    public function getSubscriptionStartTime()
    {
        return $this->container['subscriptionStartTime'];
    }

    /**
     * Sets subscriptionStartTime.
     *
     * @param null|string $subscriptionStartTime subscriptionStartTime
     *
     * @return self
     */
    public function setSubscriptionStartTime($subscriptionStartTime)
    {
        if (is_null($subscriptionStartTime)) {
            throw new \InvalidArgumentException('non-nullable subscriptionStartTime cannot be null');
        }
        $this->container['subscriptionStartTime'] = $subscriptionStartTime;

        return $this;
    }

    /**
     * Gets canRedeemToFlex.
     *
     * @return null|bool
     */
    public function getCanRedeemToFlex()
    {
        return $this->container['canRedeemToFlex'];
    }

    /**
     * Sets canRedeemToFlex.
     *
     * @param null|bool $canRedeemToFlex canRedeemToFlex
     *
     * @return self
     */
    public function setCanRedeemToFlex($canRedeemToFlex)
    {
        if (is_null($canRedeemToFlex)) {
            throw new \InvalidArgumentException('non-nullable canRedeemToFlex cannot be null');
        }
        $this->container['canRedeemToFlex'] = $canRedeemToFlex;

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

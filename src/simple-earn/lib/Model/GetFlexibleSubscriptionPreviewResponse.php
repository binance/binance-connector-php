<?php

/**
 * GetFlexibleSubscriptionPreviewResponse.
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
 * Binance Simple Earn REST API.
 *
 * OpenAPI Specification for the Binance Simple Earn REST API
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

namespace Binance\Client\SimpleEarn\Model;

use Binance\Common\Dtos\ModelInterface;
use Binance\Common\ObjectSerializer;

/**
 * GetFlexibleSubscriptionPreviewResponse Class Doc Comment.
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 *
 * @implements \ArrayAccess<string, mixed>
 */
class GetFlexibleSubscriptionPreviewResponse implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'getFlexibleSubscriptionPreviewResponse';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'totalAmount' => 'string',
        'rewardAsset' => 'string',
        'airDropAsset' => 'string',
        'estDailyBonusRewards' => 'string',
        'estDailyRealTimeRewards' => 'string',
        'estDailyAirdropRewards' => 'string',
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
        'totalAmount' => null,
        'rewardAsset' => null,
        'airDropAsset' => null,
        'estDailyBonusRewards' => null,
        'estDailyRealTimeRewards' => null,
        'estDailyAirdropRewards' => null,
    ];

    /**
     * Array of nullable properties. Used for (de)serialization.
     *
     * @var bool[]
     */
    protected static array $openAPINullables = [
        'totalAmount' => false,
        'rewardAsset' => false,
        'airDropAsset' => false,
        'estDailyBonusRewards' => false,
        'estDailyRealTimeRewards' => false,
        'estDailyAirdropRewards' => false,
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
        'totalAmount' => 'totalAmount',
        'rewardAsset' => 'rewardAsset',
        'airDropAsset' => 'airDropAsset',
        'estDailyBonusRewards' => 'estDailyBonusRewards',
        'estDailyRealTimeRewards' => 'estDailyRealTimeRewards',
        'estDailyAirdropRewards' => 'estDailyAirdropRewards',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'totalAmount' => 'setTotalAmount',
        'rewardAsset' => 'setRewardAsset',
        'airDropAsset' => 'setAirDropAsset',
        'estDailyBonusRewards' => 'setEstDailyBonusRewards',
        'estDailyRealTimeRewards' => 'setEstDailyRealTimeRewards',
        'estDailyAirdropRewards' => 'setEstDailyAirdropRewards',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'totalAmount' => 'getTotalAmount',
        'rewardAsset' => 'getRewardAsset',
        'airDropAsset' => 'getAirDropAsset',
        'estDailyBonusRewards' => 'getEstDailyBonusRewards',
        'estDailyRealTimeRewards' => 'getEstDailyRealTimeRewards',
        'estDailyAirdropRewards' => 'getEstDailyAirdropRewards',
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
        $this->setIfExists('totalAmount', $data ?? [], null);
        $this->setIfExists('rewardAsset', $data ?? [], null);
        $this->setIfExists('airDropAsset', $data ?? [], null);
        $this->setIfExists('estDailyBonusRewards', $data ?? [], null);
        $this->setIfExists('estDailyRealTimeRewards', $data ?? [], null);
        $this->setIfExists('estDailyAirdropRewards', $data ?? [], null);
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
     * Gets totalAmount.
     *
     * @return null|string
     */
    public function getTotalAmount()
    {
        return $this->container['totalAmount'];
    }

    /**
     * Sets totalAmount.
     *
     * @param null|string $totalAmount totalAmount
     *
     * @return self
     */
    public function setTotalAmount($totalAmount)
    {
        if (is_null($totalAmount)) {
            throw new \InvalidArgumentException('non-nullable totalAmount cannot be null');
        }
        $this->container['totalAmount'] = $totalAmount;

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
     * Gets airDropAsset.
     *
     * @return null|string
     */
    public function getAirDropAsset()
    {
        return $this->container['airDropAsset'];
    }

    /**
     * Sets airDropAsset.
     *
     * @param null|string $airDropAsset airDropAsset
     *
     * @return self
     */
    public function setAirDropAsset($airDropAsset)
    {
        if (is_null($airDropAsset)) {
            throw new \InvalidArgumentException('non-nullable airDropAsset cannot be null');
        }
        $this->container['airDropAsset'] = $airDropAsset;

        return $this;
    }

    /**
     * Gets estDailyBonusRewards.
     *
     * @return null|string
     */
    public function getEstDailyBonusRewards()
    {
        return $this->container['estDailyBonusRewards'];
    }

    /**
     * Sets estDailyBonusRewards.
     *
     * @param null|string $estDailyBonusRewards estDailyBonusRewards
     *
     * @return self
     */
    public function setEstDailyBonusRewards($estDailyBonusRewards)
    {
        if (is_null($estDailyBonusRewards)) {
            throw new \InvalidArgumentException('non-nullable estDailyBonusRewards cannot be null');
        }
        $this->container['estDailyBonusRewards'] = $estDailyBonusRewards;

        return $this;
    }

    /**
     * Gets estDailyRealTimeRewards.
     *
     * @return null|string
     */
    public function getEstDailyRealTimeRewards()
    {
        return $this->container['estDailyRealTimeRewards'];
    }

    /**
     * Sets estDailyRealTimeRewards.
     *
     * @param null|string $estDailyRealTimeRewards estDailyRealTimeRewards
     *
     * @return self
     */
    public function setEstDailyRealTimeRewards($estDailyRealTimeRewards)
    {
        if (is_null($estDailyRealTimeRewards)) {
            throw new \InvalidArgumentException('non-nullable estDailyRealTimeRewards cannot be null');
        }
        $this->container['estDailyRealTimeRewards'] = $estDailyRealTimeRewards;

        return $this;
    }

    /**
     * Gets estDailyAirdropRewards.
     *
     * @return null|string
     */
    public function getEstDailyAirdropRewards()
    {
        return $this->container['estDailyAirdropRewards'];
    }

    /**
     * Sets estDailyAirdropRewards.
     *
     * @param null|string $estDailyAirdropRewards estDailyAirdropRewards
     *
     * @return self
     */
    public function setEstDailyAirdropRewards($estDailyAirdropRewards)
    {
        if (is_null($estDailyAirdropRewards)) {
            throw new \InvalidArgumentException('non-nullable estDailyAirdropRewards cannot be null');
        }
        $this->container['estDailyAirdropRewards'] = $estDailyAirdropRewards;

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

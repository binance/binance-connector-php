<?php

/**
 * GetSimpleEarnFlexibleProductListResponseRowsInner.
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
 * GetSimpleEarnFlexibleProductListResponseRowsInner Class Doc Comment.
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 *
 * @implements \ArrayAccess<string, mixed>
 */
class GetSimpleEarnFlexibleProductListResponseRowsInner implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'getSimpleEarnFlexibleProductListResponse_rows_inner';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'asset' => 'string',
        'latestAnnualPercentageRate' => 'string',
        'tierAnnualPercentageRate' => '\Binance\Client\SimpleEarn\Model\GetFlexibleProductPositionResponseRowsInnerTierAnnualPercentageRate',
        'airDropPercentageRate' => 'string',
        'canPurchase' => 'bool',
        'canRedeem' => 'bool',
        'isSoldOut' => 'bool',
        'hot' => 'bool',
        'minPurchaseAmount' => 'string',
        'productId' => 'string',
        'subscriptionStartTime' => 'string',
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
        'asset' => null,
        'latestAnnualPercentageRate' => null,
        'tierAnnualPercentageRate' => null,
        'airDropPercentageRate' => null,
        'canPurchase' => null,
        'canRedeem' => null,
        'isSoldOut' => null,
        'hot' => null,
        'minPurchaseAmount' => null,
        'productId' => null,
        'subscriptionStartTime' => null,
        'status' => null,
    ];

    /**
     * Array of nullable properties. Used for (de)serialization.
     *
     * @var bool[]
     */
    protected static array $openAPINullables = [
        'asset' => false,
        'latestAnnualPercentageRate' => false,
        'tierAnnualPercentageRate' => false,
        'airDropPercentageRate' => false,
        'canPurchase' => false,
        'canRedeem' => false,
        'isSoldOut' => false,
        'hot' => false,
        'minPurchaseAmount' => false,
        'productId' => false,
        'subscriptionStartTime' => false,
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
        'asset' => 'asset',
        'latestAnnualPercentageRate' => 'latestAnnualPercentageRate',
        'tierAnnualPercentageRate' => 'tierAnnualPercentageRate',
        'airDropPercentageRate' => 'airDropPercentageRate',
        'canPurchase' => 'canPurchase',
        'canRedeem' => 'canRedeem',
        'isSoldOut' => 'isSoldOut',
        'hot' => 'hot',
        'minPurchaseAmount' => 'minPurchaseAmount',
        'productId' => 'productId',
        'subscriptionStartTime' => 'subscriptionStartTime',
        'status' => 'status',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'asset' => 'setAsset',
        'latestAnnualPercentageRate' => 'setLatestAnnualPercentageRate',
        'tierAnnualPercentageRate' => 'setTierAnnualPercentageRate',
        'airDropPercentageRate' => 'setAirDropPercentageRate',
        'canPurchase' => 'setCanPurchase',
        'canRedeem' => 'setCanRedeem',
        'isSoldOut' => 'setIsSoldOut',
        'hot' => 'setHot',
        'minPurchaseAmount' => 'setMinPurchaseAmount',
        'productId' => 'setProductId',
        'subscriptionStartTime' => 'setSubscriptionStartTime',
        'status' => 'setStatus',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'asset' => 'getAsset',
        'latestAnnualPercentageRate' => 'getLatestAnnualPercentageRate',
        'tierAnnualPercentageRate' => 'getTierAnnualPercentageRate',
        'airDropPercentageRate' => 'getAirDropPercentageRate',
        'canPurchase' => 'getCanPurchase',
        'canRedeem' => 'getCanRedeem',
        'isSoldOut' => 'getIsSoldOut',
        'hot' => 'getHot',
        'minPurchaseAmount' => 'getMinPurchaseAmount',
        'productId' => 'getProductId',
        'subscriptionStartTime' => 'getSubscriptionStartTime',
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
        $this->setIfExists('asset', $data ?? [], null);
        $this->setIfExists('latestAnnualPercentageRate', $data ?? [], null);
        $this->setIfExists('tierAnnualPercentageRate', $data ?? [], null);
        $this->setIfExists('airDropPercentageRate', $data ?? [], null);
        $this->setIfExists('canPurchase', $data ?? [], null);
        $this->setIfExists('canRedeem', $data ?? [], null);
        $this->setIfExists('isSoldOut', $data ?? [], null);
        $this->setIfExists('hot', $data ?? [], null);
        $this->setIfExists('minPurchaseAmount', $data ?? [], null);
        $this->setIfExists('productId', $data ?? [], null);
        $this->setIfExists('subscriptionStartTime', $data ?? [], null);
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
     * Gets latestAnnualPercentageRate.
     *
     * @return null|string
     */
    public function getLatestAnnualPercentageRate()
    {
        return $this->container['latestAnnualPercentageRate'];
    }

    /**
     * Sets latestAnnualPercentageRate.
     *
     * @param null|string $latestAnnualPercentageRate latestAnnualPercentageRate
     *
     * @return self
     */
    public function setLatestAnnualPercentageRate($latestAnnualPercentageRate)
    {
        if (is_null($latestAnnualPercentageRate)) {
            throw new \InvalidArgumentException('non-nullable latestAnnualPercentageRate cannot be null');
        }
        $this->container['latestAnnualPercentageRate'] = $latestAnnualPercentageRate;

        return $this;
    }

    /**
     * Gets tierAnnualPercentageRate.
     *
     * @return null|GetFlexibleProductPositionResponseRowsInnerTierAnnualPercentageRate
     */
    public function getTierAnnualPercentageRate()
    {
        return $this->container['tierAnnualPercentageRate'];
    }

    /**
     * Sets tierAnnualPercentageRate.
     *
     * @param null|GetFlexibleProductPositionResponseRowsInnerTierAnnualPercentageRate $tierAnnualPercentageRate tierAnnualPercentageRate
     *
     * @return self
     */
    public function setTierAnnualPercentageRate($tierAnnualPercentageRate)
    {
        if (is_null($tierAnnualPercentageRate)) {
            throw new \InvalidArgumentException('non-nullable tierAnnualPercentageRate cannot be null');
        }
        $this->container['tierAnnualPercentageRate'] = $tierAnnualPercentageRate;

        return $this;
    }

    /**
     * Gets airDropPercentageRate.
     *
     * @return null|string
     */
    public function getAirDropPercentageRate()
    {
        return $this->container['airDropPercentageRate'];
    }

    /**
     * Sets airDropPercentageRate.
     *
     * @param null|string $airDropPercentageRate airDropPercentageRate
     *
     * @return self
     */
    public function setAirDropPercentageRate($airDropPercentageRate)
    {
        if (is_null($airDropPercentageRate)) {
            throw new \InvalidArgumentException('non-nullable airDropPercentageRate cannot be null');
        }
        $this->container['airDropPercentageRate'] = $airDropPercentageRate;

        return $this;
    }

    /**
     * Gets canPurchase.
     *
     * @return null|bool
     */
    public function getCanPurchase()
    {
        return $this->container['canPurchase'];
    }

    /**
     * Sets canPurchase.
     *
     * @param null|bool $canPurchase canPurchase
     *
     * @return self
     */
    public function setCanPurchase($canPurchase)
    {
        if (is_null($canPurchase)) {
            throw new \InvalidArgumentException('non-nullable canPurchase cannot be null');
        }
        $this->container['canPurchase'] = $canPurchase;

        return $this;
    }

    /**
     * Gets canRedeem.
     *
     * @return null|bool
     */
    public function getCanRedeem()
    {
        return $this->container['canRedeem'];
    }

    /**
     * Sets canRedeem.
     *
     * @param null|bool $canRedeem canRedeem
     *
     * @return self
     */
    public function setCanRedeem($canRedeem)
    {
        if (is_null($canRedeem)) {
            throw new \InvalidArgumentException('non-nullable canRedeem cannot be null');
        }
        $this->container['canRedeem'] = $canRedeem;

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
     * Gets hot.
     *
     * @return null|bool
     */
    public function getHot()
    {
        return $this->container['hot'];
    }

    /**
     * Sets hot.
     *
     * @param null|bool $hot hot
     *
     * @return self
     */
    public function setHot($hot)
    {
        if (is_null($hot)) {
            throw new \InvalidArgumentException('non-nullable hot cannot be null');
        }
        $this->container['hot'] = $hot;

        return $this;
    }

    /**
     * Gets minPurchaseAmount.
     *
     * @return null|string
     */
    public function getMinPurchaseAmount()
    {
        return $this->container['minPurchaseAmount'];
    }

    /**
     * Sets minPurchaseAmount.
     *
     * @param null|string $minPurchaseAmount minPurchaseAmount
     *
     * @return self
     */
    public function setMinPurchaseAmount($minPurchaseAmount)
    {
        if (is_null($minPurchaseAmount)) {
            throw new \InvalidArgumentException('non-nullable minPurchaseAmount cannot be null');
        }
        $this->container['minPurchaseAmount'] = $minPurchaseAmount;

        return $this;
    }

    /**
     * Gets productId.
     *
     * @return null|string
     */
    public function getProductId()
    {
        return $this->container['productId'];
    }

    /**
     * Sets productId.
     *
     * @param null|string $productId productId
     *
     * @return self
     */
    public function setProductId($productId)
    {
        if (is_null($productId)) {
            throw new \InvalidArgumentException('non-nullable productId cannot be null');
        }
        $this->container['productId'] = $productId;

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

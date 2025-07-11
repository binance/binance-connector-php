<?php

/**
 * AccountInformationV3Response.
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
 * Binance Derivatives Trading USDS Futures REST API.
 *
 * OpenAPI Specification for the Binance Derivatives Trading USDS Futures REST API
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

namespace Binance\Client\DerivativesTradingUsdsFutures\Model;

use Binance\Common\Dtos\ModelInterface;
use Binance\Common\ObjectSerializer;

/**
 * AccountInformationV3Response Class Doc Comment.
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 *
 * @implements \ArrayAccess<string, mixed>
 */
class AccountInformationV3Response implements ModelInterface, \ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'accountInformationV3Response';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'totalInitialMargin' => 'string',
        'totalMaintMargin' => 'string',
        'totalWalletBalance' => 'string',
        'totalUnrealizedProfit' => 'string',
        'totalMarginBalance' => 'string',
        'totalPositionInitialMargin' => 'string',
        'totalOpenOrderInitialMargin' => 'string',
        'totalCrossWalletBalance' => 'string',
        'totalCrossUnPnl' => 'string',
        'availableBalance' => 'string',
        'maxWithdrawAmount' => 'string',
        'assets' => '\Binance\Client\DerivativesTradingUsdsFutures\Model\AccountInformationV3ResponseAssetsInner[]',
        'positions' => '\Binance\Client\DerivativesTradingUsdsFutures\Model\AccountInformationV3ResponsePositionsInner[]',
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
        'totalInitialMargin' => null,
        'totalMaintMargin' => null,
        'totalWalletBalance' => null,
        'totalUnrealizedProfit' => null,
        'totalMarginBalance' => null,
        'totalPositionInitialMargin' => null,
        'totalOpenOrderInitialMargin' => null,
        'totalCrossWalletBalance' => null,
        'totalCrossUnPnl' => null,
        'availableBalance' => null,
        'maxWithdrawAmount' => null,
        'assets' => null,
        'positions' => null,
    ];

    /**
     * Array of nullable properties. Used for (de)serialization.
     *
     * @var bool[]
     */
    protected static array $openAPINullables = [
        'totalInitialMargin' => false,
        'totalMaintMargin' => false,
        'totalWalletBalance' => false,
        'totalUnrealizedProfit' => false,
        'totalMarginBalance' => false,
        'totalPositionInitialMargin' => false,
        'totalOpenOrderInitialMargin' => false,
        'totalCrossWalletBalance' => false,
        'totalCrossUnPnl' => false,
        'availableBalance' => false,
        'maxWithdrawAmount' => false,
        'assets' => false,
        'positions' => false,
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
        'totalInitialMargin' => 'totalInitialMargin',
        'totalMaintMargin' => 'totalMaintMargin',
        'totalWalletBalance' => 'totalWalletBalance',
        'totalUnrealizedProfit' => 'totalUnrealizedProfit',
        'totalMarginBalance' => 'totalMarginBalance',
        'totalPositionInitialMargin' => 'totalPositionInitialMargin',
        'totalOpenOrderInitialMargin' => 'totalOpenOrderInitialMargin',
        'totalCrossWalletBalance' => 'totalCrossWalletBalance',
        'totalCrossUnPnl' => 'totalCrossUnPnl',
        'availableBalance' => 'availableBalance',
        'maxWithdrawAmount' => 'maxWithdrawAmount',
        'assets' => 'assets',
        'positions' => 'positions',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'totalInitialMargin' => 'setTotalInitialMargin',
        'totalMaintMargin' => 'setTotalMaintMargin',
        'totalWalletBalance' => 'setTotalWalletBalance',
        'totalUnrealizedProfit' => 'setTotalUnrealizedProfit',
        'totalMarginBalance' => 'setTotalMarginBalance',
        'totalPositionInitialMargin' => 'setTotalPositionInitialMargin',
        'totalOpenOrderInitialMargin' => 'setTotalOpenOrderInitialMargin',
        'totalCrossWalletBalance' => 'setTotalCrossWalletBalance',
        'totalCrossUnPnl' => 'setTotalCrossUnPnl',
        'availableBalance' => 'setAvailableBalance',
        'maxWithdrawAmount' => 'setMaxWithdrawAmount',
        'assets' => 'setAssets',
        'positions' => 'setPositions',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'totalInitialMargin' => 'getTotalInitialMargin',
        'totalMaintMargin' => 'getTotalMaintMargin',
        'totalWalletBalance' => 'getTotalWalletBalance',
        'totalUnrealizedProfit' => 'getTotalUnrealizedProfit',
        'totalMarginBalance' => 'getTotalMarginBalance',
        'totalPositionInitialMargin' => 'getTotalPositionInitialMargin',
        'totalOpenOrderInitialMargin' => 'getTotalOpenOrderInitialMargin',
        'totalCrossWalletBalance' => 'getTotalCrossWalletBalance',
        'totalCrossUnPnl' => 'getTotalCrossUnPnl',
        'availableBalance' => 'getAvailableBalance',
        'maxWithdrawAmount' => 'getMaxWithdrawAmount',
        'assets' => 'getAssets',
        'positions' => 'getPositions',
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
        $this->setIfExists('totalInitialMargin', $data ?? [], null);
        $this->setIfExists('totalMaintMargin', $data ?? [], null);
        $this->setIfExists('totalWalletBalance', $data ?? [], null);
        $this->setIfExists('totalUnrealizedProfit', $data ?? [], null);
        $this->setIfExists('totalMarginBalance', $data ?? [], null);
        $this->setIfExists('totalPositionInitialMargin', $data ?? [], null);
        $this->setIfExists('totalOpenOrderInitialMargin', $data ?? [], null);
        $this->setIfExists('totalCrossWalletBalance', $data ?? [], null);
        $this->setIfExists('totalCrossUnPnl', $data ?? [], null);
        $this->setIfExists('availableBalance', $data ?? [], null);
        $this->setIfExists('maxWithdrawAmount', $data ?? [], null);
        $this->setIfExists('assets', $data ?? [], null);
        $this->setIfExists('positions', $data ?? [], null);
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
     * Gets totalInitialMargin.
     *
     * @return null|string
     */
    public function getTotalInitialMargin()
    {
        return $this->container['totalInitialMargin'];
    }

    /**
     * Sets totalInitialMargin.
     *
     * @param null|string $totalInitialMargin totalInitialMargin
     *
     * @return self
     */
    public function setTotalInitialMargin($totalInitialMargin)
    {
        if (is_null($totalInitialMargin)) {
            throw new \InvalidArgumentException('non-nullable totalInitialMargin cannot be null');
        }
        $this->container['totalInitialMargin'] = $totalInitialMargin;

        return $this;
    }

    /**
     * Gets totalMaintMargin.
     *
     * @return null|string
     */
    public function getTotalMaintMargin()
    {
        return $this->container['totalMaintMargin'];
    }

    /**
     * Sets totalMaintMargin.
     *
     * @param null|string $totalMaintMargin totalMaintMargin
     *
     * @return self
     */
    public function setTotalMaintMargin($totalMaintMargin)
    {
        if (is_null($totalMaintMargin)) {
            throw new \InvalidArgumentException('non-nullable totalMaintMargin cannot be null');
        }
        $this->container['totalMaintMargin'] = $totalMaintMargin;

        return $this;
    }

    /**
     * Gets totalWalletBalance.
     *
     * @return null|string
     */
    public function getTotalWalletBalance()
    {
        return $this->container['totalWalletBalance'];
    }

    /**
     * Sets totalWalletBalance.
     *
     * @param null|string $totalWalletBalance totalWalletBalance
     *
     * @return self
     */
    public function setTotalWalletBalance($totalWalletBalance)
    {
        if (is_null($totalWalletBalance)) {
            throw new \InvalidArgumentException('non-nullable totalWalletBalance cannot be null');
        }
        $this->container['totalWalletBalance'] = $totalWalletBalance;

        return $this;
    }

    /**
     * Gets totalUnrealizedProfit.
     *
     * @return null|string
     */
    public function getTotalUnrealizedProfit()
    {
        return $this->container['totalUnrealizedProfit'];
    }

    /**
     * Sets totalUnrealizedProfit.
     *
     * @param null|string $totalUnrealizedProfit totalUnrealizedProfit
     *
     * @return self
     */
    public function setTotalUnrealizedProfit($totalUnrealizedProfit)
    {
        if (is_null($totalUnrealizedProfit)) {
            throw new \InvalidArgumentException('non-nullable totalUnrealizedProfit cannot be null');
        }
        $this->container['totalUnrealizedProfit'] = $totalUnrealizedProfit;

        return $this;
    }

    /**
     * Gets totalMarginBalance.
     *
     * @return null|string
     */
    public function getTotalMarginBalance()
    {
        return $this->container['totalMarginBalance'];
    }

    /**
     * Sets totalMarginBalance.
     *
     * @param null|string $totalMarginBalance totalMarginBalance
     *
     * @return self
     */
    public function setTotalMarginBalance($totalMarginBalance)
    {
        if (is_null($totalMarginBalance)) {
            throw new \InvalidArgumentException('non-nullable totalMarginBalance cannot be null');
        }
        $this->container['totalMarginBalance'] = $totalMarginBalance;

        return $this;
    }

    /**
     * Gets totalPositionInitialMargin.
     *
     * @return null|string
     */
    public function getTotalPositionInitialMargin()
    {
        return $this->container['totalPositionInitialMargin'];
    }

    /**
     * Sets totalPositionInitialMargin.
     *
     * @param null|string $totalPositionInitialMargin totalPositionInitialMargin
     *
     * @return self
     */
    public function setTotalPositionInitialMargin($totalPositionInitialMargin)
    {
        if (is_null($totalPositionInitialMargin)) {
            throw new \InvalidArgumentException('non-nullable totalPositionInitialMargin cannot be null');
        }
        $this->container['totalPositionInitialMargin'] = $totalPositionInitialMargin;

        return $this;
    }

    /**
     * Gets totalOpenOrderInitialMargin.
     *
     * @return null|string
     */
    public function getTotalOpenOrderInitialMargin()
    {
        return $this->container['totalOpenOrderInitialMargin'];
    }

    /**
     * Sets totalOpenOrderInitialMargin.
     *
     * @param null|string $totalOpenOrderInitialMargin totalOpenOrderInitialMargin
     *
     * @return self
     */
    public function setTotalOpenOrderInitialMargin($totalOpenOrderInitialMargin)
    {
        if (is_null($totalOpenOrderInitialMargin)) {
            throw new \InvalidArgumentException('non-nullable totalOpenOrderInitialMargin cannot be null');
        }
        $this->container['totalOpenOrderInitialMargin'] = $totalOpenOrderInitialMargin;

        return $this;
    }

    /**
     * Gets totalCrossWalletBalance.
     *
     * @return null|string
     */
    public function getTotalCrossWalletBalance()
    {
        return $this->container['totalCrossWalletBalance'];
    }

    /**
     * Sets totalCrossWalletBalance.
     *
     * @param null|string $totalCrossWalletBalance totalCrossWalletBalance
     *
     * @return self
     */
    public function setTotalCrossWalletBalance($totalCrossWalletBalance)
    {
        if (is_null($totalCrossWalletBalance)) {
            throw new \InvalidArgumentException('non-nullable totalCrossWalletBalance cannot be null');
        }
        $this->container['totalCrossWalletBalance'] = $totalCrossWalletBalance;

        return $this;
    }

    /**
     * Gets totalCrossUnPnl.
     *
     * @return null|string
     */
    public function getTotalCrossUnPnl()
    {
        return $this->container['totalCrossUnPnl'];
    }

    /**
     * Sets totalCrossUnPnl.
     *
     * @param null|string $totalCrossUnPnl totalCrossUnPnl
     *
     * @return self
     */
    public function setTotalCrossUnPnl($totalCrossUnPnl)
    {
        if (is_null($totalCrossUnPnl)) {
            throw new \InvalidArgumentException('non-nullable totalCrossUnPnl cannot be null');
        }
        $this->container['totalCrossUnPnl'] = $totalCrossUnPnl;

        return $this;
    }

    /**
     * Gets availableBalance.
     *
     * @return null|string
     */
    public function getAvailableBalance()
    {
        return $this->container['availableBalance'];
    }

    /**
     * Sets availableBalance.
     *
     * @param null|string $availableBalance availableBalance
     *
     * @return self
     */
    public function setAvailableBalance($availableBalance)
    {
        if (is_null($availableBalance)) {
            throw new \InvalidArgumentException('non-nullable availableBalance cannot be null');
        }
        $this->container['availableBalance'] = $availableBalance;

        return $this;
    }

    /**
     * Gets maxWithdrawAmount.
     *
     * @return null|string
     */
    public function getMaxWithdrawAmount()
    {
        return $this->container['maxWithdrawAmount'];
    }

    /**
     * Sets maxWithdrawAmount.
     *
     * @param null|string $maxWithdrawAmount maxWithdrawAmount
     *
     * @return self
     */
    public function setMaxWithdrawAmount($maxWithdrawAmount)
    {
        if (is_null($maxWithdrawAmount)) {
            throw new \InvalidArgumentException('non-nullable maxWithdrawAmount cannot be null');
        }
        $this->container['maxWithdrawAmount'] = $maxWithdrawAmount;

        return $this;
    }

    /**
     * Gets assets.
     *
     * @return null|AccountInformationV3ResponseAssetsInner[]
     */
    public function getAssets()
    {
        return $this->container['assets'];
    }

    /**
     * Sets assets.
     *
     * @param null|AccountInformationV3ResponseAssetsInner[] $assets assets
     *
     * @return self
     */
    public function setAssets($assets)
    {
        if (is_null($assets)) {
            throw new \InvalidArgumentException('non-nullable assets cannot be null');
        }
        $this->container['assets'] = $assets;

        return $this;
    }

    /**
     * Gets positions.
     *
     * @return null|AccountInformationV3ResponsePositionsInner[]
     */
    public function getPositions()
    {
        return $this->container['positions'];
    }

    /**
     * Sets positions.
     *
     * @param null|AccountInformationV3ResponsePositionsInner[] $positions positions
     *
     * @return self
     */
    public function setPositions($positions)
    {
        if (is_null($positions)) {
            throw new \InvalidArgumentException('non-nullable positions cannot be null');
        }
        $this->container['positions'] = $positions;

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

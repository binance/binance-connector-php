<?php

/**
 * BasisResponse.
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

/**
 * BasisResponse Class Doc Comment.
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 *
 * @implements \ArrayAccess<string, mixed>
 */
class BasisResponse
{
    public const DISCRIMINATOR = null;

    /** @var BasisResponseInner[] */
    protected array $items = [];

    /**
     * Constructor.
     *
     * @param BasisResponseInner[] items
     */
    public function __construct(array $items = [])
    {
        $this->items = $items;
    }

    /**
     * Type of items in the array.
     */
    public static function getItemType(): string
    {
        return '\Binance\Client\DerivativesTradingUsdsFutures\Model\BasisResponseInner';
    }

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return [];
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
        return true;
    }

    /**
     * @return BasisResponseInner[]
     */
    public function getItems(): array
    {
        return $this->items;
    }

    public function addItem(BasisResponseInner $item): void
    {
        $this->items[] = $item;
    }

    /**
     * @param BasisResponseInner[] $items
     */
    public function addItems(array $items): void
    {
        if (empty($this->items)) {
            $this->items = $items;
        } else {
            $this->items = array_merge($this->items, $items);
        }
    }
}

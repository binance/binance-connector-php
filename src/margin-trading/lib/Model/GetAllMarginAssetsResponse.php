<?php

/**
 * GetAllMarginAssetsResponse.
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
 * Binance Margin Trading REST API.
 *
 * OpenAPI Specification for the Binance Margin Trading REST API
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

namespace Binance\Client\MarginTrading\Model;

/**
 * GetAllMarginAssetsResponse Class Doc Comment.
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @see     https://openapi-generator.tech
 *
 * @implements \ArrayAccess<string, mixed>
 */
class GetAllMarginAssetsResponse
{
    public const DISCRIMINATOR = null;

    /** @var GetAllMarginAssetsResponseInner[] */
    protected array $items = [];

    /**
     * Constructor.
     *
     * @param GetAllMarginAssetsResponseInner[] items
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
        return '\Binance\Client\MarginTrading\Model\GetAllMarginAssetsResponseInner';
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
     * @return GetAllMarginAssetsResponseInner[]
     */
    public function getItems(): array
    {
        return $this->items;
    }

    public function addItem(GetAllMarginAssetsResponseInner $item): void
    {
        $this->items[] = $item;
    }

    /**
     * @param GetAllMarginAssetsResponseInner[] $items
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

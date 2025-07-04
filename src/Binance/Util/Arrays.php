<?php

namespace Binance\Util;

final class Arrays
{
    /**
     *  Stringify array, from array to string
     *  ["BTCUSDT","BNBBTC"] => '["BTCUSDT","BNBBTC"]'
     */
    public static function stringify(array $values): string
    {
        $encoded = array_reduce($values, function ($carry, $item) {
            return sprintf("%s\"%s\"%s", $carry, $item, ",");
        });
        $encoded = rtrim($encoded, ",");
        return sprintf("%s%s%s", "[", $encoded, "]");
    }
}

<?php

namespace Binance\Util;

final class Strings
{
    public static function isEmpty(string $val): bool
    {
        return empty(trim($val)) && trim($val) !== '0';
    }
}

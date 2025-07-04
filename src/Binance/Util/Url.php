<?php

namespace Binance\Util;

final class Url
{
    public static function buildQuery(array $params)
    {
        $query_array = array();
        foreach ($params as $key => $value) {
            if (is_array($value)) {
                $query_array = array_merge($query_array, array_map(function ($v) use ($key) {
                    if (is_bool($v) === true) {
                        return $v ? urlencode($key) . '=true' : urlencode($key) . '=false';
                    }
                    return urlencode($key) . '=' . urlencode($v);
                }, $value));
            } else {
                if (is_bool($value) === true) {
                    $query_array[] =  $value ? urlencode($key) . '=true' : urlencode($key) . '=false';
                } else {
                    $query_array[] = urlencode($key) . '=' . urlencode($value);
                }
            }
        }
        return implode('&', $query_array);
    }
}

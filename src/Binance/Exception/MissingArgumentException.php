<?php

namespace Binance\Exception;

class MissingArgumentException extends BinanceException
{
    public function __construct($required)
    {
        if (is_string($required)) {
            $required = [$required];
        }

        parent::__construct(sprintf('One or more of required ("%s") parameters is missing!', implode('", "', $required)));
    }
}

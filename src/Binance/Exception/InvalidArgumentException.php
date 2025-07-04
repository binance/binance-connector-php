<?php

namespace Binance\Exception;

class InvalidArgumentException extends BinanceException
{
    private $field;

    private $current_value;

    private $expected_value;

    private $note;

    public function __construct(string $field, $current_value = "", $expected_value = "", string $note = "")
    {
        $this->field = $field;
        $this->current_value = $current_value;
        $this->expected_value = $expected_value;
        $this->note = $note;

        parent::__construct(sprintf('"%s" is invalid. Expected: %s, current value: %s. %s.', $this->field, $this->expected_value, $this->current_value, $this->note));
    }
}

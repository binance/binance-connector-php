<?php

namespace Binance\Common\Auth;

interface SignerInterface
{
    public function sign(string $data): string;
}

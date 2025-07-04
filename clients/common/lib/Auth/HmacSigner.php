<?php

namespace Binance\Common\Auth;

class HmacSigner implements SignerInterface
{
    private $secretKey;

    public function __construct($secretKey, $privateKeyPass = null)
    {
        $this->secretKey = $secretKey;
    }

    public function sign(string $data): string
    {
        return hash_hmac('sha256', $data, $this->secretKey);
    }
}

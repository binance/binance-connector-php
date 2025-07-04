<?php

namespace Binance\Common\Configuration;

class SignatureConfiguration
{
    private $apiKey;
    private $secretKey;
    private $privateKey;
    private $privateKeyPass;

    public function __construct(?ConfigurationBuilder $configurationBuilder = null)
    {
        if (!empty($configurationBuilder)) {
            $this->apiKey = $configurationBuilder->getApiKey();
            $this->secretKey = $configurationBuilder->getSecretKey();
            $this->privateKey = $configurationBuilder->getPrivateKey();
            $this->privateKeyPass = $configurationBuilder->getPrivateKeyPass();
        }
    }

    public function getApiKey()
    {
        return $this->apiKey;
    }

    public function setApiKey($apiKey)
    {
        $this->apiKey = $apiKey;
    }

    public function getSecretKey()
    {
        return $this->secretKey;
    }

    public function setSecretKey($secretKey)
    {
        $this->secretKey = $secretKey;
    }

    public function getPrivateKey()
    {
        return $this->privateKey;
    }

    public function setPrivateKey($privateKey)
    {
        $this->privateKey = $privateKey;
    }

    public function getPrivateKeyPass()
    {
        return $this->privateKeyPass;
    }

    public function setPrivateKeyPass($privateKeyPass)
    {
        $this->privateKeyPass = $privateKeyPass;
    }
}

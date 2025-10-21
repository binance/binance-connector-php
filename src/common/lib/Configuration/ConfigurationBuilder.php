<?php

namespace Binance\Common\Configuration;

class ConfigurationBuilder
{
    /** Base URL */
    protected $url = 'https://api.binance.com';

    /** Proxy configuration */
    protected $proxy;

    /** Proxy Auth configuration */
    protected $proxyAuthenticator;

    /** Certificate Pinner configuration */
    protected $certificatePinner;

    /** Enable compression on request body */
    private $compression = true;

    /** number of retries in case of error */
    private $retries = 3;

    /** delay between retries, in ms */
    private $backOff = 200;

    /** connect timeout, in ms */
    private $connectTimeout = 1000;

    /** read timeout, in ms */
    private $readTimeout = 5000;

    /** timeunit to be returned by APIs, default MILLISECOND */
    private $timeUnit;

    /** custom headers to be added to each request */
    private $customHeaders;
    
    private $apiKey;
    private $secretKey;
    private $privateKey;
    private $privateKeyPass;

    public function url($url)
    {
        $this->url = $url;

        return $this;
    }

    public function proxy($proxy)
    {
        $this->proxy = $proxy;

        return $this;
    }

    public function proxyAuthenticator($proxyAuthenticator)
    {
        $this->proxyAuthenticator = $proxyAuthenticator;

        return $this;
    }

    public function certificatePinner($certificatePinner)
    {
        $this->certificatePinner = $certificatePinner;

        return $this;
    }

    public function compression($compression)
    {
        $this->compression = $compression;

        return $this;
    }

    public function retries($retries)
    {
        $this->retries = $retries;

        return $this;
    }

    public function backOff($backOff)
    {
        $this->backOff = $backOff;

        return $this;
    }

    public function connectTimeout($connectTimeout)
    {
        $this->connectTimeout = $connectTimeout;

        return $this;
    }

    public function readTimeout($readTimeout)
    {
        $this->readTimeout = $readTimeout;

        return $this;
    }

    public function timeUnit($timeUnit)
    {
        $this->timeUnit = $timeUnit;

        return $this;
    }

    public function customHeaders($customHeaders)
    {
        $this->customHeaders = $customHeaders;

        return $this;
    }

    public function apiKey($apiKey)
    {
        $this->apiKey = $apiKey;

        return $this;
    }

    public function secretKey($secretKey)
    {
        $this->secretKey = $secretKey;

        return $this;
    }

    public function privateKey($privateKey)
    {
        $this->privateKey = $privateKey;

        return $this;
    }

    public function privateKeyPass($privateKeyPass)
    {
        $this->privateKeyPass = $privateKeyPass;

        return $this;
    }

    public function geturl()
    {
        return $this->url;
    }

    public function getproxy()
    {
        return $this->proxy;
    }

    public function getProxyAuthenticator()
    {
        return $this->proxyAuthenticator;
    }

    public function getCertificatePinner()
    {
        return $this->certificatePinner;
    }

    public function getCompression()
    {
        return $this->compression;
    }

    public function getRetries()
    {
        return $this->retries;
    }

    public function getBackOff()
    {
        return $this->backOff;
    }

    public function getConnectTimeout()
    {
        return $this->connectTimeout;
    }

    public function getReadTimeout()
    {
        return $this->readTimeout;
    }

    public function getTimeUnit()
    {
        return $this->timeUnit;
    }

    public function getCustomHeaders()
    {
        return $this->customHeaders;
    }

    public function getApiKey()
    {
        return $this->apiKey;
    }

    public function getSecretKey()
    {
        return $this->secretKey;
    }

    public function getPrivateKey()
    {
        return $this->privateKey;
    }

    public function getPrivateKeyPass()
    {
        return $this->privateKeyPass;
    }

    public function build()
    {
        return new ClientConfiguration($this);
    }
}

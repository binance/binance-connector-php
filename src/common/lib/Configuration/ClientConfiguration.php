<?php

namespace Binance\Common\Configuration;

class ClientConfiguration
{
    /** Base URL */
    protected $url;

    /** Proxy configuration */
    protected $proxy;

    /** Proxy Auth configuration */
    protected $proxyAuthenticator;

    /** Certificate Pinner configuration */
    protected $certificatePinner;

    /** Signature configuration for signed requests */
    private $signatureConfiguration;

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

    public function __construct(?ConfigurationBuilder $configurationBuilder = null)
    {
        if (!empty($configurationBuilder)) {
            $this->url = $configurationBuilder->getUrl();
            $this->proxy = $configurationBuilder->getProxy();
            $this->proxyAuthenticator = $configurationBuilder->getProxyAuthenticator();
            $this->certificatePinner = $configurationBuilder->getCertificatePinner();
            $this->compression = $configurationBuilder->getCompression();
            $this->retries = $configurationBuilder->getRetries();
            $this->backOff = $configurationBuilder->getBackOff();
            $this->connectTimeout = $configurationBuilder->getConnectTimeout();
            $this->readTimeout = $configurationBuilder->getReadTimeout();
            $this->timeUnit = $configurationBuilder->getTimeUnit();
            $this->customHeaders = $configurationBuilder->getCustomHeaders();

            $this->signatureConfiguration = new SignatureConfiguration($configurationBuilder);
        }
    }

    public function getUrl(): mixed
    {
        return $this->url;
    }

    public function setUrl(string $url): void
    {
        $this->url = $url;
    }

    public function getProxy(): array
    {
        return $this->proxy ?: [];
    }

    public function setProxy($proxy): void
    {
        $this->proxy = $proxy;
    }

    public function getProxyAuthenticator(): mixed
    {
        return $this->proxyAuthenticator;
    }

    public function setProxyAuthenticator($proxyAuthenticator): void
    {
        $this->proxyAuthenticator = $proxyAuthenticator;
    }

    public function getCertificatePinner(): mixed
    {
        return $this->certificatePinner;
    }

    public function setCertificatePinner($certificatePinner): void
    {
        $this->certificatePinner = $certificatePinner;
    }

    public function getSignatureConfiguration(): ?SignatureConfiguration
    {
        return $this->signatureConfiguration;
    }

    public function setSignatureConfiguration($signatureConfiguration): void
    {
        $this->signatureConfiguration = $signatureConfiguration;
    }

    public function getCompression(): bool
    {
        return $this->compression;
    }

    public function setCompression(bool $compression): void
    {
        $this->compression = $compression;
    }

    public function getRetries(): int
    {
        return $this->retries;
    }

    public function setRetries(int $retries): void
    {
        $this->retries = $retries;
    }

    public function getBackOff(): int
    {
        return $this->backOff;
    }

    public function setBackOff(int $backOff): void
    {
        $this->backOff = $backOff;
    }

    public function getTimeUnit(): mixed
    {
        return $this->timeUnit;
    }

    public function setTimeUnit($timeUnit): void
    {
        $this->timeUnit = $timeUnit;
    }

    public function getCustomHeaders(): mixed
    {
        return $this->customHeaders;
    }

    public function setCustomHeaders($customHeaders): void
    {
        $this->customHeaders = $customHeaders;
    }

    public function getConnectTimeout(): int
    {
        return $this->connectTimeout;
    }

    public function setConnectTimeout(int $connectTimeout): void
    {
        $this->connectTimeout = $connectTimeout;
    }

    public function getReadTimeout(): int
    {
        return $this->readTimeout;
    }

    public function setReadTimeout(int $readTimeout): void
    {
        $this->readTimeout = $readTimeout;
    }
}

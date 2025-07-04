<?php

namespace Binance\Common\Auth;

class PrivateKeySigner implements SignerInterface
{
    private $privateKey;

    private $privateKeyPass;

    private $privateKeyData;

    private $keyDetails;

    /**
     * @param array|OpenSSLAsymmetricKey|OpenSSLCertificate|string $privateKey     OpenSSLAsymmetricKey - a key, returned by openssl_get_privatekey() `string` - a PEM formatted key
     * @param null|mixed                                           $privateKeyPass
     */
    public function __construct($privateKey, $privateKeyPass = null)
    {
        $this->privateKey = $privateKey;
        $this->privateKeyPass = $privateKeyPass;
        if (!empty($this->privateKeyPass)) {
            $this->privateKeyData = openssl_pkey_get_private($this->privateKey, $this->privateKeyPass);
        } else {
            $this->privateKeyData = openssl_pkey_get_private($this->privateKey);
        }
        $this->keyDetails = openssl_pkey_get_details($this->privateKeyData);
    }

    public function sign(string $data): string
    {
        if (isset($this->keyDetails['ed25519'])) {
            // algorithm must be null for "ed25519": see https://docs.openssl.org/master/man3/EVP_DigestSignInit/
            @openssl_sign($data, $binarySignature, $this->privateKeyData, null);
        } else {
            openssl_sign($data, $binarySignature, $this->privateKeyData, OPENSSL_ALGO_SHA256);
        }

        return base64_encode($binarySignature);
    }
}

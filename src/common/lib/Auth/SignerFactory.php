<?php

namespace Binance\Common\Auth;

use Binance\Common\Configuration\SignatureConfiguration;

class SignerFactory
{
    public static function getSigner(SignatureConfiguration $signatureConfiguration): ?SignerInterface
    {
        if (!empty($signatureConfiguration->getSecretKey())) {
            return new HmacSigner($signatureConfiguration->getSecretKey());
        }

        if (!empty($signatureConfiguration->getPrivateKey())) {
            return new PrivateKeySigner(
                $signatureConfiguration->getPrivateKey(),
                $signatureConfiguration->getPrivateKeyPass()
            );
        }

        return null;
    }
}

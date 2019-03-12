<?php
namespace ExponentPhpSDK;

use ExponentPhpSDK\Exceptions\ExpoRegistrarException;

class ExpoRegistrar
{
    /**
     * ExpoRegistrar constructor.
     */
    public function __construct()
    {

    }

    /**
     * Determines if a token is a valid Expo push token
     *
     * @param string $token
     *
     * @return bool
     */
    private function isValidExpoPushToken(string $token)
    {
        return  substr($token, 0, 18) ===  "ExponentPushToken[" && substr($token, -1) === ']';
    }
}

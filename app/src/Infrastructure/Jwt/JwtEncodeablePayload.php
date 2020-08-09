<?php


namespace App\Infrastructure\Jwt;


interface JwtEncodeablePayload
{
    /**
     * @param $payload
     * @param $key
     * @param string $alg
     * @param null $keyId
     * @param null $head
     * @return string
     */
    public static function encode($payload, $key, $alg = 'HS256', $keyId = null, $head = null);
}

<?php


namespace App\Infrastructure\Jwt;


interface JwtDecodeablePayload
{
    /**
     * @param $jwt
     * @param $key
     * @param array $allowed_algs
     * @return object
     */
    public static function decode($jwt, $key, array $allowed_algs = []);
}

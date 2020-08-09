<?php


namespace App\Services;


use App\Domain\Jwt\JwtPayload;
use App\Infrastructure\Jwt\JwtDecodeablePayload;
use App\Infrastructure\Jwt\JwtEncodeablePayload;


class JwtEncoderHandler
{

    /**
     * @var JwtPayload
     */
    private JwtPayload $payload;
    /**
     * @var JwtEncodeablePayload
     */
    private JwtEncodeablePayload $jwtEncoder;
    /**
     * @var string
     */
    private string $key;

    /**
     * JwtEncoderHandler constructor.
     * @param JwtEncodeablePayload $jwtEncoder
     * @param JwtPayload $payload
     * @param string $key
     */
    public function __construct(JwtEncodeablePayload $jwtEncoder, JwtPayload $payload, string $key)
    {

        $this->jwtEncoder = $jwtEncoder;
        $this->payload    = $payload;
        $this->key        = $key;
    }

    /**
     * @return string
     */
    public function handle(): string
    {
        return $this->jwtEncoder::encode($this->payload, $this->key);
    }


}

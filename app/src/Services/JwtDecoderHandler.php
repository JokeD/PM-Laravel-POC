<?php


namespace App\Services;


use App\Domain\Jwt\JwtPayload;
use App\Infrastructure\Jwt\JwtDecodeablePayload;
use App\Infrastructure\Jwt\JwtEncodeablePayload;


class JwtDecoderHandler
{

    /**
     * @var string
     */
    private string $jwtToken;
    /**
     * @var JwtDecodeablePayload
     */
    private JwtDecodeablePayload $jwtDecoder;
    /**
     * @var string
     */
    private string $alg;
    /**
     * @var string
     */
    private string $key;

    /**
     * JwtDecoderHandler constructor.
     * @param JwtDecodeablePayload $jwtDecoder
     * @param string $jwtToken
     * @param string $alg
     * @param string $key
     */
    public function __construct(JwtDecodeablePayload $jwtDecoder, string $jwtToken, string $alg, string $key)
    {
        $this->jwtDecoder = $jwtDecoder;
        $this->jwtToken = $jwtToken;
        $this->alg = $alg;
        $this->key = $key;
    }

    /**
     * @return object
     */
    public function handle(): object
    {
        return $this->jwtDecoder::decode($this->jwtToken,$this->key,[$this->alg]);
    }


}

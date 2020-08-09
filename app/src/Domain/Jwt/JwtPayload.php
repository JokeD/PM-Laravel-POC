<?php


namespace App\Domain\Jwt;


class JwtPayload
{
    /** @var string */
    private string $iss;
    /** @var string */
    private string $aud;
    /** @var int */
    private int $iat;
    /** @var int */
    private int $exp;
    /** @var int */
    private int $nbf;
    /** @var array */
    private array $data;

    /**
     * Jwt constructor.
     * @param string $iss
     * @param string $aud
     * @param int $iat
     * @param int $exp
     * @param int $nbf
     * @param array $data
     */
    private function __construct(string $iss, string $aud, int $iat, int $exp, int $nbf, array $data)
    {
        $this->iss  = $iss;
        $this->aud  = $aud;
        $this->iat  = $iat;
        $this->exp  = $exp;
        $this->nbf  = $nbf;
        $this->data = $data;
    }

    /**
     * @param string $iss
     * @param string $aud
     * @param int $iat
     * @param int $exp
     * @param int $nbf
     * @param array $data
     * @return static
     */
    public static function create(string $iss, string $aud, int $iat, int $exp, int $nbf, array $data): self
    {
        return new self($iss, $aud, $iat, $exp, $nbf, $data);
    }

    /**
     * @return array
     */
    public function get(): array
    {
        return [
            'iss'  => $this->iss,
            'aud'  => $this->aud,
            'iat'  => $this->iat,
            'exp'  => $this->exp,
            'nbf'  => $this->nbf,
            'data' => $this->data,
        ];
    }


}

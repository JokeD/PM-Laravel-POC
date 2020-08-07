<?php

declare(strict_types = 1);

namespace App\Domain\User;


class ContactDetails
{
    /** @var string  */
    private string $name;
    /** @var string  */
    private string $surname;
    /** @var string  */
    private string $email;
    /** @var int  */
    private int $phone;

    /**
     * ContactDetails constructor.
     * @param string $name
     * @param string $surname
     * @param string $email
     * @param int $phone
     */
    private function __construct(string $name, string $surname, string $email, int $phone)
    {
        $this->name    = $name;
        $this->surname = $surname;
        $this->email   = $email;
        $this->phone   = $phone;
    }

    /**
     * @param string $name
     * @param string $surname
     * @param string $email
     * @param int $phone
     * @return static
     */
    public static function create(string $name, string $surname, string $email, int $phone): self
    {
        return new self($name, $surname, $email, $phone);
    }
}

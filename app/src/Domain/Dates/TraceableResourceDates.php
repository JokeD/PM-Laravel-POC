<?php

declare(strict_types = 1);

namespace App\Domain\Dates;


use DateTime;

class TraceableResourceDates
{
    /** @var DateTime  */
    private DateTime $createdAt;
    /** @var DateTime|null  */
    private ?DateTime $updatedAt;

    /**
     * TraceableResourceDates constructor.
     * @param DateTime $createdAt
     * @param DateTime|null $updatedAt
     */
    public function __construct(DateTime $createdAt, ?DateTime $updatedAt)
    {
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
    }

    /**
     * @param DateTime $createdAt
     * @param DateTime|null $updatedAt
     * @return static
     */
    public static function create(DateTime $createdAt, ?DateTime $updatedAt): self
    {
        return new self($createdAt,$updatedAt);
    }
}

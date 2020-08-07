<?php

declare(strict_types = 1);

namespace App\Domain\User;

use App\Domain\Dates\TraceableResourceDates;

class User
{
    /** @var string  */
    private string $jwtToken;
    /** @var bool  */
    private bool $active;
    /** @var ContactDetails  */
    private ContactDetails $contactDetails;
    /** @var TraceableResourceDates  */
    private TraceableResourceDates $traceResourceDates;

    /**
     * User constructor.
     * @param ContactDetails $contactDetails
     * @param TraceableResourceDates $traceResourceDates
     * @param bool $active
     */
    private function __construct(
        ContactDetails $contactDetails,
        TraceableResourceDates $traceResourceDates,
        $active = false
    )
    {
        $this->contactDetails     = $contactDetails;
        $this->traceResourceDates = $traceResourceDates;
        $this->active             = $active;
    }

    /**
     * @param ContactDetails $contactDetails
     * @param TraceableResourceDates $traceResourceDates
     * @param $active
     * @return static
     */
    public static function create(
        ContactDetails $contactDetails,
        TraceableResourceDates $traceResourceDates,
        $active
    ) : self
    {
        return new self($contactDetails, $traceResourceDates, $active);
    }


}

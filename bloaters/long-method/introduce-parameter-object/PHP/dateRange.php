<?php

namespace PHP;

use DateInterval;
use DateTime;

class DateRange
{
    private $startDate;
    private $endDate;

    function __construct(DateTime $start, DateTime $end)
    {
        $this->startDate = $start;
        $this->endDate = $end;
    }

    public function getStartDate(): DateTime
    {
        return $this->startDate;
    }

    public function getEndDate(): DateTime
    {
        return $this->endDate;
    }

    public function totalDuration(): DateInterval
    {
        return $this->startDate->diff($this->endDate);
    }
}

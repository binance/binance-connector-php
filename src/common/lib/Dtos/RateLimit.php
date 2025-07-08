<?php

namespace Binance\Common\Dtos;

class RateLimit
{
    private $rateLimitType;
    private $interval;
    private $intervalNum;
    private $count;
    private $retryAfter;

    // Getter and Setter for rateLimitType
    public function getRateLimitType()
    {
        return $this->rateLimitType;
    }

    public function setRateLimitType($rateLimitType)
    {
        $this->rateLimitType = $rateLimitType;
    }

    // Getter and Setter for interval
    public function getInterval()
    {
        return $this->interval;
    }

    public function setInterval($interval)
    {
        $this->interval = $interval;
    }

    // Getter and Setter for intervalNum
    public function getIntervalNum()
    {
        return $this->intervalNum;
    }

    public function setIntervalNum($intervalNum)
    {
        $this->intervalNum = $intervalNum;
    }

    // Getter and Setter for count
    public function getCount()
    {
        return $this->count;
    }

    public function setCount($count)
    {
        $this->count = $count;
    }

    // Getter and Setter for retryAfter
    public function getRetryAfter()
    {
        return $this->retryAfter;
    }

    public function setRetryAfter($retryAfter)
    {
        $this->retryAfter = $retryAfter;
    }
}

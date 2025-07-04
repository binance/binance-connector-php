<?php

namespace Binance\Common\Dtos;

enum RateLimitType
{
    case REQUEST_WEIGHT;
    case ORDERS;
}

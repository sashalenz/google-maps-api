<?php

namespace Sashalenz\GoogleMapsApi\Enums;

enum FallbackReason: string
{
    case FALLBACK_REASON_UNSPECIFIED = 'FALLBACK_REASON_UNSPECIFIED';
    case SERVER_ERROR = 'SERVER_ERROR';
    case LATENCY_EXCEEDED = 'LATENCY_EXCEEDED';
}

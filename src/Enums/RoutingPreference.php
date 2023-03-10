<?php

namespace Sashalenz\GoogleMapsApi\Enums;

enum RoutingPreference: string
{
    case ROUTING_PREFERENCE_UNSPECIFIED = 'ROUTING_PREFERENCE_UNSPECIFIED';
    case TRAFFIC_UNAWARE = 'TRAFFIC_UNAWARE';
    case TRAFFIC_AWARE = 'TRAFFIC_AWARE';
    case TRAFFIC_AWARE_OPTIMAL = 'TRAFFIC_AWARE_OPTIMAL';
}

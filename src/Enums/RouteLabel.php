<?php

namespace Sashalenz\GoogleMapsApi\Enums;

enum RouteLabel: string
{
    case ROUTE_LABEL_UNSPECIFIED = 'ROUTE_LABEL_UNSPECIFIED';
    case DEFAULT_ROUTE = 'DEFAULT_ROUTE';
    case DEFAULT_ROUTE_ALTERNATE = 'DEFAULT_ROUTE_ALTERNATE';
    case FUEL_EFFICIENT = 'FUEL_EFFICIENT';
}

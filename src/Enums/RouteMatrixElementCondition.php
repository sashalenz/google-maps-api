<?php

namespace Sashalenz\GoogleMapsApi\Enums;

enum RouteMatrixElementCondition: string
{
    case ROUTE_MATRIX_ELEMENT_CONDITION_UNSPECIFIED = 'ROUTE_MATRIX_ELEMENT_CONDITION_UNSPECIFIED';
    case ROUTE_EXISTS = 'ROUTE_EXISTS';
    case ROUTE_NOT_FOUND = 'ROUTE_NOT_FOUND';
}

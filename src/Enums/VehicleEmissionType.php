<?php

namespace Sashalenz\GoogleMapsApi\Enums;

enum VehicleEmissionType: string
{
    case VEHICLE_EMISSION_TYPE_UNSPECIFIED = 'VEHICLE_EMISSION_TYPE_UNSPECIFIED';
    case GASOLINE = 'GASOLINE';
    case ELECTRIC = 'ELECTRIC';
    case HYBRID = 'HYBRID';
    case DIESEL = 'DIESEL';
}

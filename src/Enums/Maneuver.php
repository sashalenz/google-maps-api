<?php

namespace Sashalenz\GoogleMapsApi\Enums;

enum Maneuver: string
{
    case MANEUVER_UNSPECIFIED = 'MANEUVER_UNSPECIFIED';
    case TURN_SLIGHT_LEFT = 'TURN_SLIGHT_LEFT';
    case TURN_SHARP_LEFT = 'TURN_SHARP_LEFT';
    case UTURN_LEFT = 'UTURN_LEFT';
    case TURN_LEFT = 'TURN_LEFT';
    case TURN_SLIGHT_RIGHT = 'TURN_SLIGHT_RIGHT';
    case TURN_SHARP_RIGHT = 'TURN_SHARP_RIGHT';
    case UTURN_RIGHT = 'UTURN_RIGHT';
    case TURN_RIGHT = 'TURN_RIGHT';
    case STRAIGHT = 'STRAIGHT';
    case RAMP_LEFT = 'RAMP_LEFT';
    case RAMP_RIGHT = 'RAMP_RIGHT';
    case MERGE = 'MERGE';
    case FORK_LEFT = 'FORK_LEFT';
    case FORK_RIGHT = 'FORK_RIGHT';
    case FERRY = 'FERRY';
    case FERRY_TRAIN = 'FERRY_TRAIN';
    case ROUNDABOUT_LEFT = 'ROUNDABOUT_LEFT';
    case ROUNDABOUT_RIGHT = 'ROUNDABOUT_RIGHT';
}

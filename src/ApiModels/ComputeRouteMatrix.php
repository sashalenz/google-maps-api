<?php

namespace Sashalenz\GoogleMapsApi\ApiModels;

use DateTime;
use Sashalenz\GoogleMapsApi\Enums\RouteTravelMode;
use Sashalenz\GoogleMapsApi\Enums\RoutingPreference;
use Sashalenz\GoogleMapsApi\Exceptions\GoogleMapsApiException;
use Sashalenz\GoogleMapsApi\RequestData\ComputeRoutesParams;
use Sashalenz\GoogleMapsApi\ResponseData\ComputeRoutesResponse;
use Sashalenz\GoogleMapsApi\Types\RouteMatrixOrigin;
use Sashalenz\GoogleMapsApi\Types\RouteModifiers;
use Sashalenz\GoogleMapsApi\Types\Waypoint;

class ComputeRouteMatrix extends BaseModel
{
    protected string $baseUrl = 'https://routes.googleapis.com';

    protected string $method = '/distanceMatrix/v2:computeRouteMatrix';

    protected ComputeRoutesParams $params;

    protected array $headers = [
        'X-Goog-FieldMask' => 'originIndex,destinationIndex,status,condition,distanceMeters,duration,staticDuration',
    ];

    public function __construct()
    {
        $this->params = ComputeRoutesParams::from([
            'routingPreference' => RoutingPreference::TRAFFIC_AWARE_OPTIMAL,
            'languageCode' => 'uk-UA',
        ]);
    }

    public function travelMode(RouteTravelMode $travelMode): self
    {
        $this->params->travelMode = $travelMode;

        return $this;
    }

    public function routingPreference(RoutingPreference $routingPreference): self
    {
        $this->params->routingPreference = $routingPreference;

        return $this;
    }

    public function departureTime(DateTime $departureTime): self
    {
        $this->params->departureTime = $departureTime;

        return $this;
    }

    public function languageCode(string $languageCode): self
    {
        $this->params->languageCode = $languageCode;

        return $this;
    }

    public function regionCode(string $regionCode): self
    {
        $this->params->regionCode = $regionCode;

        return $this;
    }

    public function extraComputations(...$extraComputations): self
    {
        $this->params->extraComputations = array_merge(
            $this->params->extraComputations,
            $extraComputations
        );

        return $this;
    }

    public function originLocation(string $latitude, string $longitude, ?RouteModifiers $routeModifiers = null): self
    {
        return $this->addOrigin(
            waypoint: Waypoint::from([
                'location' => [
                    'latLng' => [
                        'latitude' => $latitude,
                        'longitude' => $longitude,
                    ],
                ],
            ]),
            routeModifiers: $routeModifiers
        );
    }

    public function originPlaceId(string $placeId, ?RouteModifiers $routeModifiers = null): self
    {
        return $this->addOrigin(
            waypoint: Waypoint::from([
                'placeId' => $placeId,
            ]),
            routeModifiers: $routeModifiers
        );
    }

    public function originAddress(string $address, ?RouteModifiers $routeModifiers = null): self
    {
        return $this->addOrigin(
            waypoint: Waypoint::from([
                'address' => $address,
            ]),
            routeModifiers: $routeModifiers
        );
    }

    public function destinationLocation(string $latitude, string $longitude): self
    {
        return $this->addDestination(
            waypoint: Waypoint::from([
                'location' => [
                    'latLng' => [
                        'latitude' => $latitude,
                        'longitude' => $longitude,
                    ],
                ],
            ])
        );
    }

    public function destinationPlaceId(string $placeId): self
    {
        return $this->addDestination(
            waypoint: Waypoint::from([
                'placeId' => $placeId,
            ])
        );
    }

    public function destinationAddress(string $address): self
    {
        return $this->addDestination(
            waypoint: Waypoint::from([
                'address' => $address,
            ])
        );
    }

    private function addOrigin(Waypoint $waypoint, ?RouteModifiers $routeModifiers = null): self
    {
        $this->params->origins->push(
            RouteMatrixOrigin::from([
                'waypoint' => $waypoint,
                'routeModifiers' => $routeModifiers,
            ])
        );

        return $this;
    }

    private function addDestination(Waypoint $waypoint): self
    {
        $this->params->destinations->push(
            RouteMatrixOrigin::from([
                'waypoint' => $waypoint,
            ])
        );

        return $this;
    }

    /**
     * @throws GoogleMapsApiException
     */
    public function get(): ComputeRoutesResponse
    {
        return ComputeRoutesResponse::from($this->request());
    }
}

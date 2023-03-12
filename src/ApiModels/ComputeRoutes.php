<?php

namespace Sashalenz\GoogleMapsApi\ApiModels;

use DateTime;
use Sashalenz\GoogleMapsApi\Enums\PolylineEncoding;
use Sashalenz\GoogleMapsApi\Enums\PolylineQuality;
use Sashalenz\GoogleMapsApi\Enums\RouteTravelMode;
use Sashalenz\GoogleMapsApi\Enums\RoutingPreference;
use Sashalenz\GoogleMapsApi\Enums\Units;
use Sashalenz\GoogleMapsApi\Exceptions\GoogleMapsApiException;
use Sashalenz\GoogleMapsApi\RequestData\ComputeRoutesParams;
use Sashalenz\GoogleMapsApi\ResponseData\ComputeRoutesResponse;
use Sashalenz\GoogleMapsApi\Types\Waypoint;

class ComputeRoutes extends BaseModel
{
    protected string $baseUrl = 'https://routes.googleapis.com';

    protected string $method = '/directions/v2:computeRoutes';

    protected ComputeRoutesParams $params;

    protected array $headers = [
        'X-Goog-FieldMask' => 'routes.duration,routes.staticDuration,routes.distanceMeters,routes.polyline.encodedPolyline',
    ];

    public function __construct()
    {
        $this->params = ComputeRoutesParams::from([
            'units' => Units::METRIC,
            'routingPreference' => RoutingPreference::TRAFFIC_AWARE_OPTIMAL,
            'languageCode' => 'uk-UA',
        ]);
    }

    public function travelMode(RouteTravelMode $travelMode): self
    {
        $this->params->travelMode = $travelMode;

        return $this;
    }

    public function units(Units $units): self
    {
        $this->params->units = $units;

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

    public function polylineQuality(PolylineQuality $polylineQuality): self
    {
        $this->params->polylineQuality = $polylineQuality;

        return $this;
    }

    public function polylineEncoding(PolylineEncoding $polylineEncoding): self
    {
        $this->params->polylineEncoding = $polylineEncoding;

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

    public function computeAlternativeRoutes(): self
    {
        $this->params->computeAlternativeRoutes = true;

        return $this;
    }

    public function originLocation(string $latitude, string $longitude): self
    {
        $this->params->origin = Waypoint::from([
            'location' => [
                'latLng' => [
                    'latitude' => $latitude,
                    'longitude' => $longitude,
                ],
            ],
        ]);

        return $this;
    }

    public function destinationLocation(string $latitude, string $longitude): self
    {
        $this->params->destination = Waypoint::from([
            'location' => [
                'latLng' => [
                    'latitude' => $latitude,
                    'longitude' => $longitude,
                ],
            ],
        ]);

        return $this;
    }

    public function originPlaceId(string $placeId): self
    {
        $this->params->origin = Waypoint::from([
            'placeId' => $placeId,
        ]);

        return $this;
    }

    public function destinationPlaceId(string $placeId): self
    {
        $this->params->destination = Waypoint::from([
            'placeId' => $placeId,
        ]);

        return $this;
    }

    public function originAddress(string $address): self
    {
        $this->params->origin = Waypoint::from([
            'address' => $address,
        ]);

        return $this;
    }

    public function destinationAddress(string $address): self
    {
        $this->params->destination = Waypoint::from([
            'address' => $address,
        ]);

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

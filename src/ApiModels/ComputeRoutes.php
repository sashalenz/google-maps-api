<?php

namespace Sashalenz\GoogleMapsApi\ApiModels;

use Sashalenz\GoogleMapsApi\Enums\RoutingPreference;
use Sashalenz\GoogleMapsApi\Enums\Units;
use Sashalenz\GoogleMapsApi\Exceptions\GoogleMapsApiException;
use Sashalenz\GoogleMapsApi\RequestData\ComputeRoutesParams;
use Sashalenz\GoogleMapsApi\ResponseData\ComputeRoutesResponse;
use Sashalenz\GoogleMapsApi\Types\Waypoint;

class ComputeRoutes extends BaseModel
{
    protected string $baseUrl = 'https://routes.googleapis.com/directions';

    protected string $method = 'v2:computeRoutes';

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
        $resp = $this->request();
        ray($resp);

        return ComputeRoutesResponse::from(
            $resp
        );
    }
}

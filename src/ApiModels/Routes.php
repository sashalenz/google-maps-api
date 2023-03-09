<?php

namespace Sashalenz\GoogleMapsApi\ApiModels;

class Routes extends BaseModel
{
    protected string $baseUrl = 'https://routes.googleapis.com/directions';

    protected string $method = 'v2:computeRoutes';

    protected array $params = [
        'origin' => [],
        'destination' => [],
        'travelMode' => 'DRIVE',
        'routingPreference' => 'TRAFFIC_AWARE',
        'computeAlternativeRoutes' => false,
        'routeModifiers' => [
            'avoidTolls' => false,
            'avoidHighways' => false,
            'avoidFerries' => false,
        ],
        'requestedReferenceRoutes' => [
            'FUEL_EFFICIENT',
        ],
        'languageCode' => 'uk-UA',
        'units' => 'METRIC',
    ];

    public function originLocation(float $latitude, float $longitude): self
    {
        $this->params['origin'] = [
            'location' => [
                'latitude' => $latitude,
                'longitude' => $longitude,
            ],
        ];

        return $this;
    }

    public function destinationLocation(float $latitude, float $longitude): self
    {
        $this->params['destination'] = [
            'location' => [
                'latitude' => $latitude,
                'longitude' => $longitude,
            ],
        ];

        return $this;
    }

    public function originPlaceId(string $placeId): self
    {
        $this->params['origin'] = [
            'placeId' => $placeId,
        ];

        return $this;
    }

    public function destinationPlaceId(string $placeId): self
    {
        $this->params['destination'] = [
            'placeId' => $placeId,
        ];

        return $this;
    }

    public function originAddress(string $address): self
    {
        $this->params['origin'] = [
            'address' => $address,
        ];

        return $this;
    }

    public function destinationAddress(string $address): self
    {
        $this->params['destination'] = [
            'address' => $address,
        ];

        return $this;
    }
}

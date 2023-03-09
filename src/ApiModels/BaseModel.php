<?php

namespace Sashalenz\GoogleMapsApi\ApiModels;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Validator;
use Sashalenz\GoogleMapsApi\Exceptions\GoogleMapsApiException;
use Sashalenz\GoogleMapsApi\Request;

abstract class BaseModel
{
    private bool $canBeCached = false;

    private int $cacheSeconds = -1;

    private string $baseUrl = 'https://maps.googleapis.com/maps/api/';

    private string $method = '';

    private array $params = [];

    public function cache(int $seconds = -1): self
    {
        $this->canBeCached = true;
        $this->cacheSeconds = $seconds;

        return $this;
    }

    public function params(array $params): self
    {
        $this->params = array_merge($this->params, $params);

        return $this;
    }

    /**
     * @throws GoogleMapsApiException
     */
    protected function validate(array $rules = []): self
    {
        $validator = Validator::make(
            $this->params,
            $rules
        );

        if ($validator->fails()) {
            throw new GoogleMapsApiException('Validation exception '.$validator->errors()->first());
        }

        return $this;
    }

    /**
     * @throws GoogleMapsApiException
     */
    public function request(): Collection
    {
        $request = new Request(
            $this->baseUrl,
            $this->method,
            $this->params,
        );

        if ($this->canBeCached) {
            return $request->cache($this->cacheSeconds);
        }

        return $request->make();
    }
}

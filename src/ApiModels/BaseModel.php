<?php

namespace Sashalenz\GoogleMapsApi\ApiModels;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Validator;
use Sashalenz\GoogleMapsApi\Exceptions\GoogleMapsApiException;
use Sashalenz\GoogleMapsApi\Request;
use Spatie\LaravelData\Data;

abstract class BaseModel
{
    private bool $canBeCached = false;

    private int $cacheSeconds = -1;

    protected string $baseUrl = 'https://maps.googleapis.com/maps/api/';

    protected string $method = '';

    protected array $headers = [];

    protected bool $isPost = true;

    protected function getParams(): array
    {
        if (! isset($this->params)) {
            return [];
        }

        if ($this->params instanceof Data) {
            return $this->params->toArray();
        }

        return $this->params;
    }

    public function cache(int $seconds = -1): self
    {
        $this->canBeCached = true;
        $this->cacheSeconds = $seconds;

        return $this;
    }

    /**
     * @throws GoogleMapsApiException
     */
    protected function validate(array $rules = []): self
    {
        $validator = Validator::make(
            $this->getParams(),
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
    protected function request(): Collection
    {
        $request = new Request(
            baseUrl: $this->baseUrl,
            method: $this->method,
            params: $this->getParams(),
            headers: $this->headers,
            isPost: $this->isPost,
        );

        if ($this->canBeCached) {
            return $request->cache($this->cacheSeconds);
        }

        return $request->make();
    }
}

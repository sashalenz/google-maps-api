<?php

namespace Sashalenz\GoogleMapsApi;

use Illuminate\Http\Client\RequestException;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Sashalenz\GoogleMapsApi\Exceptions\GoogleMapsApiException;

final class Request
{
    private const TIMEOUT = 10;

    private const RETRY_TIMES = 3;

    private const RETRY_SLEEP = 100;

    public function __construct(
        private readonly string $baseUrl,
        private readonly string $method,
        private readonly array $params,
        private readonly array $headers,
        private readonly bool $isPost,
    ) {
    }

    /**
     * @throws GoogleMapsApiException
     */
    public function make(): Collection
    {
        try {
            return Http::timeout(self::TIMEOUT)
                ->retry(
                    self::RETRY_TIMES,
                    self::RETRY_SLEEP
                )
                ->baseUrl($this->baseUrl)
                ->withHeaders(
                    array_merge(
                        ['X-Goog-Api-Key' => config('google-maps-api.api_key')],
                        $this->headers
                    )
                )
//                ->when(
//                    $this->isPost,
//                    fn ($request) => $request
                        ->asJson()
                        ->post(
                            $this->method,
                            $this->params
                        )
//                    fn ($request) => $request->get(
//                        $this->method,
//                        $this->params
//                    ),
//                )
                ->throw()
                ->collect();
        } catch (RequestException $e) {
            throw new GoogleMapsApiException('API Exception: '.$e->getMessage(), $e->getCode());
        }
    }

    public function cache(int $seconds = -1): Collection
    {
        if ($seconds === -1) {
            return Cache::rememberForever($this->getCacheKey(), fn () => $this->make());
        }

        return Cache::remember($this->getCacheKey(), $seconds, fn () => $this->make());
    }

    private function getCacheKey(): string
    {
        return collect([
            'gma',
            $this->method,
            base64_encode(serialize($this->params)),
        ])
            ->implode('_');
    }
}

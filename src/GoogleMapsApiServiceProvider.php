<?php

namespace Sashalenz\GoogleMapsApi;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class GoogleMapsApiServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('google-maps-api')
            ->hasConfigFile();
    }
}

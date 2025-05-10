<?php

namespace Wappo\ModelApi;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Wappo\ModelApi\Commands\ModelApiCommand;

class ModelApiServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-model-api')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_model_api_table')
            ->hasCommand(ModelApiCommand::class);
    }
}

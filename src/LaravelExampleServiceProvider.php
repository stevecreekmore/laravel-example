<?php

namespace SteveCreekmore\LaravelExample;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use SteveCreekmore\LaravelExample\Commands\LaravelExampleCommand;

class LaravelExampleServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-example')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_example_table')
            ->hasCommand(LaravelExampleCommand::class);
    }
}

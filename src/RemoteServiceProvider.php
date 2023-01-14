<?php

namespace Stryfe200fps\Remote;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Stryfe200fps\Remote\Commands\RemoteCommand;

class RemoteServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('remote')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_remote_table')
            ->hasCommand(RemoteCommand::class);
    }
}

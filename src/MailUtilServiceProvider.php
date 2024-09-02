<?php

namespace mindtwo\MailUtil;

use mindtwo\MailUtil\Commands\MailUtilCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class MailUtilServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('mail-util')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_mail_util_table')
            ->hasCommand(MailUtilCommand::class);
    }
}

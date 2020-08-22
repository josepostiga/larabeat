<?php

namespace JosePostiga\Larabeat\Tests;

use JosePostiga\Larabeat\LarabeatServiceProvider;

abstract class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function getPackageProviders($app): array
    {
        return [
            LarabeatServiceProvider::class,
        ];
    }
}

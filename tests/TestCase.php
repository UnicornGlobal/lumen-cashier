<?php

namespace Lumen\Cashier\Tests;

use Lumen\Cashier\CashierServiceProvider;
use Lumen\Testbench\TestCase as TestbenchTestCase;

abstract class TestCase extends TestbenchTestCase
{
    protected function getPackageProviders($app)
    {
        return [CashierServiceProvider::class];
    }
}

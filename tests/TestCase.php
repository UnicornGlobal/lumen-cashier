<?php

namespace Lumen\Cashier\Tests;

use Lumen\Cashier\CashierServiceProvider;
use Lumen\Testbench\TestCase as OrchestraTestCase;

abstract class TestCase extends OrchestraTestCase
{
    protected function getPackageProviders($app)
    {
        return [CashierServiceProvider::class];
    }
}

<?php

namespace Lumen\Cashier\Tests\Integration;

use Illuminate\Database\Eloquent\Model as Eloquent;
use Lumen\Cashier\Tests\Fixtures\User;
use Lumen\Cashier\Tests\TestCase;
use Stripe\ApiResource;
use Stripe\Exception\InvalidRequestException;
use Stripe\Stripe;

abstract class IntegrationTestCase extends TestCase
{
    /**
     * @var string
     */
    protected static $stripePrefix = 'cashier-test-';

    public static function setUpBeforeClass(): void
    {
        parent::setUpBeforeClass();

        Stripe::setApiKey(getenv('STRIPE_SECRET'));
    }

    public function setUp(): void
    {
        parent::setUp();

        Eloquent::unguard();

        $this->loadLumenMigrations();

        $this->artisan('migrate');
    }

    protected static function deleteStripeResource(ApiResource $resource)
    {
        try {
            $resource->delete();
        } catch (InvalidRequestException $e) {
            //
        }
    }

    protected function createCustomer($description = 'taylor'): User
    {
        return User::create([
            'email' => "{$description}@cashier-test.com",
            'name' => 'Taylor Otwell',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
        ]);
    }
}

<?php

namespace Lumen\Cashier\Tests\Fixtures;

use Lumen\Cashier\Tests\Fixtures\Auth\User as Model;
use Illuminate\Notifications\Notifiable;
use Lumen\Cashier\Billable;

class User extends Model
{
    use Billable, Notifiable;
}

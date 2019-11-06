<?php

namespace Lumen\Cashier\Tests\Fixtures;

use Lumen\Cashier\Tests\Fixtures\Auth\User as AuthUser;
use Illuminate\Notifications\Notifiable;
use Lumen\Cashier\Billable;

class User extends AuthUser
{
    use Billable, Notifiable;
}

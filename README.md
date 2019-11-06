# lumen-cashier

A fork of laravel/cashier

Work in Progress, tests do not pass right now so it's probably broken :)

## Install

`composer require --dev unicorn/lumen-cashier`

## What's Changed?

- Removed Sessions
- Removed Views
- JSON Responses
- Updated Routing
- Works in Lumen
- Lumen Testing Tools Compatibility (wip)

## What's Broken?

- Tests
- Invoices?
- Payments?
- Subscriptions?
- ?? Lots of other things (probably)

## Tests

The tests in Laravel\Cashier rely on the orchestra testbench package.

That package doesn't have Lumen compatibility, so it was forked to a new
Lumen compatible package.

That package contained another core package, which also needed to be a
new fork. This one then contained _another_ package for Lumen testing
that had partial support, so we had to add support for that too.

An upstream PR is open for the testing tool but has not been merged by the
maintainer yet.

As this support in the 3 child packages is not fully complete the tests
are not all passing. The vital functionality (for our needs at least)
unit tests pass. The Integration tests hang - it seems it has something
to do with the way the unicorn/lumen-testbench-core package loads the
migrations.

## Disclaimer

Use at your own risk! This tool is work in progress and we cannot be held
responsibile for anything that happens if you use this tool!

## Thanks

Big ups to the team that created the parent project, laravel/cashier -
this project wouldn't exist without you.

Shout out to the orchestral/testbench-core team, for the testing tools
parent project, and to albertcht/lumen-testing for making the testing
conversion easier.

---

## Original Laravel Cashier Documentation Follows

---

<p align="center"><img src="https://laravel.com/assets/img/components/logo-cashier.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/cashier"><img src="https://travis-ci.org/laravel/cashier.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/cashier"><img src="https://poser.pugx.org/laravel/cashier/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/cashier"><img src="https://poser.pugx.org/laravel/cashier/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/cashier"><img src="https://poser.pugx.org/laravel/cashier/license.svg" alt="License"></a>
</p>

## Introduction

Laravel Cashier provides an expressive, fluent interface to [Stripe's](https://stripe.com) subscription billing services. It handles almost all of the boilerplate subscription billing code you are dreading writing. In addition to basic subscription management, Cashier can handle coupons, swapping subscription, subscription "quantities", cancellation grace periods, and even generate invoice PDFs.

## Official Documentation

Documentation for Cashier can be found on the [Laravel website](https://laravel.com/docs/billing).

## Running Cashier's Tests

You will need to set the Stripe **testing** secret environment variable in a custom `phpunit.xml` file in order to run the Cashier tests.

Copy the default file using `cp phpunit.xml.dist phpunit.xml` and add the following line below the `CASHIER_MODEL` environment variable in your new `phpunit.xml` file:

    <env name="STRIPE_SECRET" value="Your Stripe Secret Key"/>

Please note that due to the fact that actual API requests against Stripe are being made, these tests take a few minutes to run.

## Contributing

Thank you for considering contributing to the Cashier. You can read the contribution guide lines [here](contributing.md).

## License

Laravel Cashier is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

# Lumen Version Documentation

## Why?

Cashier is great, but we needed it to work with Lumen

## What's Changed

Lots!

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
- Routing?
- Webhooks?
- ?? Lots of other things (probably)

## Tests

** Integration Tests are Broken **

The tests in the original Laravel\Cashier rely on the orchestra testbench
package.

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

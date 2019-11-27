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
- Nothing, as far as the tests are concerned. But we can't be sure, 
feel free to report any issues encountered

## Tests
The tests in Laravel\Cashier rely on the orchestra testbench package.

That package doesn't have Lumen compatibility, so it was forked to a new
Lumen compatible package.

That package contained another core package, which also needed to be a
new fork. This one then contained _another_ package for Lumen testing
that had partial support, so we had to add support for that too.

An upstream PR is open for the testing tool but has not been merged by the
maintainer yet.
Tests are all passing for the core functionality(at least for our use case), 
except for custom logger tests which we've commented out for now. 

NOTE: The project does not ship with a `phpunit.xml` file. To run tests,
create one from the provided `phpunit.xml.dist` and add your *test* `STRIPE_SECRET` in it.

## Disclaimer

Use at your own risk! This tool is work in progress and we cannot be held
responsibile for anything that happens if you use this tool!

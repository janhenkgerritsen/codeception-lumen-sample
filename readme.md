# Sample Lumen Application with Codeception tests.

[![Build Status](https://travis-ci.org/janhenkgerritsen/codeception-lumen-sample.svg?branch=master)](https://travis-ci.org/janhenkgerritsen/codeception-lumen-sample)

This is a very simple Lumen application used to test the Lumen module of Codeception. It has no real world functionality, only functionality to check the correct execution of the methods of the Lumen module.

### Setup

- Clone repo
- Create your .env file from the example file: `cp .env.testing .env`
- Install composer dependencies: `composer install`
- Create databases by creating the following files:
    - `storage/database.sqlite`
    - `storage/testing.sqlite`
- Run the following commands:
    - `php artisan migrate`
    - `php artisan migrate --database=testing`
- Server: 
  - run `php -S localhost:8000 -t public` and browse to localhost:8000
- Run tests
  - run Codeception, installed via Composer: `./vendor/bin/codecept run`

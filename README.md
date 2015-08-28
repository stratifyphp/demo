# Stratify demo

## Install and run

- Clone the project
- Run `composer install -o` in `minimal/`
- Run `docker-compose up` at the root

## Minimalistic application

The minimalistic application is an example of a micro-service returning a random number on every call.

It is composed of a single middleware (no routing, no authentication, …). It uses the `stratify/http` component directly instead of the whole framework.

Check out the [`minimal/index.php`](minimal/index.php) file.

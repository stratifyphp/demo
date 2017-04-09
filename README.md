# Stratify demo

## Install and run

- Clone the project

In each demo project you want to run:

- `cd` into the directory
- `composer install -o`

Then to run all the applications:

- `docker-compose up` at the root

## Minimalistic application

The minimalistic application is an example of a very optimized micro-service returning a random number on every call.

It is composed of a single middleware (no routing, no authentication, …). It uses the `stratify/http` component directly instead of the whole framework (for minimal overhead).

Check out the [`minimal/index.php`](minimal/index.php) file.

## Micro application

The micro-application is an example of a simple website using Twig. It's very similar to what you get out of the box with Silex or Slim (when you add Twig support).

Check out the [`micro/index.php`](micro/index.php) file.

## Full-stack application

The Full-stack application is an example of a well structured and organized web application.

Check out the [`full/`](full/) directory.

# folded/config

URL utilities for your PHP web app.

[![Packagist License](https://img.shields.io/packagist/l/folded/url)](https://github.com/folded-php/url/blob/master/LICENSE) [![Packagist PHP Version Support](https://img.shields.io/packagist/php-v/folded/url)](https://github.com/folded-php/url/blob/master/composer.json#L14) [![Packagist Version](https://img.shields.io/packagist/v/folded/url)](https://packagist.org/packages/folded/url) [![Build Status](https://travis-ci.com/folded-php/url.svg?branch=master)](https://travis-ci.com/folded-php/url) [![Maintainability](https://api.codeclimate.com/v1/badges/1968f36aaf19246dcc16/maintainability)](https://codeclimate.com/github/folded-php/url/maintainability) [![TODOs](https://img.shields.io/endpoint?url=https://api.tickgit.com/badge?repo=github.com/folded-php/url)](https://www.tickgit.com/browse?repo=github.com/folded-php/url)

## Summary

- [About](#about)
- [Features](#features)
- [Requirements](#requirements)
- [Installation](#installation)
- [Examples](#examples)
- [Version support](#version-support)

## About

I created this library to have an easy way to use common URL functions like getting the current URL, in a standalone way.

Folded is a constellation of packages to help you setting up a web app easily, using ready to plug in packages.

- [folded/action](https://github.com/folded-php/action): A way to organize your controllers for your web app.
- [folded/config](https://github.com/folded-php/config): Configuration and environment utilities for your PHP web app.
- [folded/crypt](https://github.com/folded-php/crypt): Encrypt and decrypt strings for your web app.
- [folded/exception](https://github.com/folded-php/exception): Various kind of exception to throw for your web app.
- [folded/history](https://github.com/folded-php/history): Manipulate the browser history for your web app.
- [folded/http](https://github.com/folded-php/http): HTTP utilities for your web app.
- [folded/orm](https://github.com/folded-php/orm): An ORM for you web app.
- [folded/request](https://github.com/folded-php/request): Request utilities, including a request validator, for your PHP web app.
- [folded/routing](https://github.com/folded-php/routing): Routing functions for your PHP web app.
- [folded/session](https://github.com/folded-php/session): Session functions for your web app.
- [folded/view](https://github.com/folded-php/view): View utilities for your PHP web app.

## Features

## Requirements

- PHP version >= 7.4.0
- Composer installed

## Installation

In your project root folder, run this command:

```bash
composer require folded/url
```

## Examples

- [1. Check if the current URL matches a given URL](#1-check-if-the-current-url-matches-a-given-url)
- [2. Get the current URL](#2-get-the-current-url)
- [3. Get a query string value by key name](#3-get-a-query-string-value-by-key-name)
- [4. Get all the query strings](#4-get-all-the-query-strings)
- [5. Check if a query string is present by key name](#5-check-if-a-query-string-is-present-by-key-name)

### 1. Check if the current URL matches a given URL

In this example, we will check if the current URL matches a given URL.

```php
use function Folded\currentUrlIs;

if (currentUrlIs("/about-us")) {
  echo "We are on page /about-us";
} else {
  echo "We are somewhere else";
}
```

### 2. Get the current URL

In this example, we will get the current URL, including the server protocol, domain, and eventuals query strings.

```php
use function Folded\getCurrentUrl;

echo getCurrentUrl(); // "https://example.com/about-us?page=1"
```

### 3. Get a query string value by key name

In this example, we will get the value of a query string by its key name.

```php
use function Folded\getQueryString;

// Assuming we are on page https://example.com/about-us?page=1

echo getQueryString("page"); // "1"
```

If the query string is not present, the function will throw an exception. To avoid this, you can use the second parameter to provide a fallback value in case the query string is not found.

```php
use function Folded\getQueryString;

echo getQueryString("page", "1");
```

### 4. Get all the query strings

In this example, we will get all the query strings as an associative array.

```php
use function Folded\getQueryStrings;

// Assuming we are on page https://example.com/about-us?page=1&view=list

$queryStrings = getQueryStrings();

foreach ($queryStrings as $key => $value) {
  echo "value of $key is $value";
}
```

### 5. Check if a query string is present by key name

In this example, we will check if a query string is present.

```php
use function Folded\hasQueryString;

if (hasQueryString("page")) {
  echo "We can grab its value";
} else {
  echo "Do something else without it";
}
```

## Version support

|        | 7.3 | 7.4 | 8.0 |
| ------ | --- | --- | --- |
| v0.1.0 | ❌  | ✔️  | ❓  |

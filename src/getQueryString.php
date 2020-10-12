<?php

declare(strict_types = 1);

namespace Folded;

use InvalidArgumentException;

if (!function_exists("Folded\getQueryString")) {
    /**
     * Get the query string value by its name.
     *
     * @param string $name     The name of the query string key.
     * @param mixed  $fallback The value to return in case the query string key is not found.
     *
     * @throws InvalidArgumentException If the query string name is empty.
     * @throws InvalidArgumentException If the query string name is not found.
     *
     * @return mixed|string
     *
     * @since 0.1.0
     *
     * @example
     * echo getQueryString("page");
     */
    function getQueryString(string $name, $fallback = null)
    {
        if (empty(trim($name))) {
            throw new InvalidArgumentException("query string name must not be empty");
        }

        $queryStrings = getQueryStrings();

        if ($fallback === null && !isset($queryStrings[$name])) {
            throw new InvalidArgumentException("query string $name not found");
        }

        return $queryStrings[$name] ?? $fallback;
    }
}

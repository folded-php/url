<?php

declare(strict_types = 1);

namespace Folded;

use InvalidArgumentException;

if (!function_exists("Folded\hasQueryString")) {
    /**
     * Returns true if the query string is present in the current URL, else returns false.
     *
     * @param string $name The name of the query string key.
     *
     * @since 0.1.0
     *
     * @example
     * if (hasQueryString("page")) {
     *  echo "has query string page";
     * } else {
     *  echo "has not query string page";
     * }
     */
    function hasQueryString(string $name): bool
    {
        if (empty(trim($name))) {
            throw new InvalidArgumentException("query string name must not be empty");
        }

        $queryStrings = getQueryStrings();

        return isset($queryStrings[$name]);
    }
}

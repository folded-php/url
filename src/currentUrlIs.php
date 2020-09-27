<?php

declare(strict_types = 1);

namespace Folded;

use InvalidArgumentException;

if (!function_exists("currentUrlIs")) {
    /**
     * Returns true if the current URL matches the given URL.
     * You don't have to pass the domain.
     *
     * @param string $url The URL to match.
     *
     * @throws InvalidArgumentException If the URL is empty.
     *
     * @since 0.1.0
     *
     * @example
     * if (currentUrlIs("/")) {
     *  echo "current URL is /";
     * } else {
     *  echo "current URL is not /";
     * }
     */
    function currentUrlIs(string $url): bool
    {
        if (empty(trim($url))) {
            throw new InvalidArgumentException("url must not be empty");
        }

        return $url === $_SERVER["REQUEST_URI"];
    }
}

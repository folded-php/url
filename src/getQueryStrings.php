<?php

declare(strict_types = 1);

namespace Folded;

if (!function_exists("getQueryStrings")) {
    /**
     * Get all the query strings as an associative array.
     *
     * @since 0.1.0
     *
     * @example
     * $queryStrings = getQueryStrings();
     *
     * foreach ($queryStrings as $key => $value) {
     *  echo "query string $key has value $value";
     * }
     */
    function getQueryStrings(): array
    {
        $queryStrings = [];

        parse_str(parse_url($_SERVER["REQUEST_URI"], PHP_URL_QUERY) ?? "", $queryStrings);

        return $queryStrings;
    }
}

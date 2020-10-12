<?php

declare(strict_types = 1);

namespace Folded;

if (!function_exists("Folded\getQueryStrings")) {
    /**
     * Get all the query strings as an associative array.
     *
     * @return array<string, string>
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

        $queryString = parse_url($_SERVER["REQUEST_URI"], PHP_URL_QUERY);

        if (!is_string($queryString)) {
            $queryString = "";
        }

        parse_str($queryString, $queryStrings);

        return $queryStrings;
    }
}

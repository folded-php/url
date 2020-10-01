<?php

declare(strict_types = 1);

namespace Folded;

if (!function_exists("Folded\getCurrentUrl")) {
    /**
     * Get the current URL, including the server protocol and the domain.
     *
     * @since 0.1.0
     *
     * @example
     * echo getCurrentUrl();
     */
    function getCurrentUrl(): string
    {
        return (mb_stripos($_SERVER["SERVER_PROTOCOL"], "https") === 0 ? "https" : "http") . "://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
    }
}

<?php

declare(strict_types = 1);

use function Folded\getCurrentUrl;

it("should get the http version of the URL", function (): void {
    $_SERVER["SERVER_PROTOCOL"] = "HTTP/1.1";
    $_SERVER["REQUEST_URI"] = "/about-us";
    $_SERVER["HTTP_HOST"] = "example.com";

    expect(getCurrentUrl())->toBe("http://example.com/about-us");
});

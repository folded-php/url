<?php

declare(strict_types = 1);

use function Folded\getQueryString;

it("should return the query string", function (): void {
    $_SERVER["REQUEST_URI"] = "/?page=1&view=list";

    expect(getQueryString("page"))->toBe("1");
});

it("should return the fallback value if the query string is not found", function (): void {
    $_SERVER["REQUEST_URI"] = "/?page=1";
    $fallback = "feed";

    expect(getQueryString("view", $fallback))->toBe($fallback);
});

it("should return the fallback value if there is not query string", function (): void {
    $_SERVER["REQUEST_URI"] = "/about-us";
    $fallback = "feed";

    expect(getQueryString("view", $fallback))->toBe($fallback);
});

it("should throw an exception message if the query string is not found", function (): void {
    $this->expectException(InvalidArgumentException::class);

    $_SERVER["REQUEST_URI"] = "/";

    getQueryString("page");
});

it("should throw an exception if the query string name is empty", function (): void {
    $this->expectException(InvalidArgumentException::class);

    getQueryString("");
});

it("should throw an exception message if the query string name is empty", function (): void {
    $this->expectExceptionMessage("query string name must not be empty");

    getQueryString("");
});

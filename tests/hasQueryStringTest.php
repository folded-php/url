<?php

declare(strict_types = 1);

use function Folded\hasQueryString;

it("should return true if the query string is present", function (): void {
    $_SERVER["REQUEST_URI"] = "/?page=1";

    expect(hasQueryString("page"))->toBeTrue();
});

it("should return false if the query string is not present", function (): void {
    $_SERVER["REQUEST_URI"] = "/";

    expect(hasQueryString("page"))->toBeFalse();
});

it("should throw an exception if the first parameter is empty", function (): void {
    $this->expectException(InvalidArgumentException::class);

    hasQueryString("");
});

it("should throw an exception message if the first parameter is empty", function (): void {
    $this->expectExceptionMessage("query string name must not be empty");

    hasQueryString("");
});

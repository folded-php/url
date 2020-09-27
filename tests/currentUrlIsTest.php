<?php

declare(strict_types = 1);

use function Folded\currentUrlIs;

it("should return true if the current URL is the expected one", function (): void {
    $url = "/about-us";
    $_SERVER["REQUEST_URI"] = $url;

    expect(currentUrlIs($url))->toBeTrue();
});

it("should return false if the current URL is not the expected one", function (): void {
    $_SERVER["REQUEST_URI"] = "/";

    expect(currentUrlIs("/about-us"))->toBeFalse();
});

it("should throw an exception if the first parameter is empty", function (): void {
    $this->expectException(InvalidArgumentException::class);

    currentUrlIs("");
});

it("should throw an exception message if the first parameter is empty", function (): void {
    $this->expectExceptionMessage("url must not be empty");

    currentUrlIs("");
});

<?php

namespace Tests\Feature;

it('default home has a successful status code', function () {
    $response = test()->get('/');
    expect($response)->toBeSuccessful();
});

it('offers a Taiwan Sudan Red measures file download', function () {
    $response = test()->get('/pdf/tw-2024-sudan-red-measures');
    expect($response)->toBeDownload();
});
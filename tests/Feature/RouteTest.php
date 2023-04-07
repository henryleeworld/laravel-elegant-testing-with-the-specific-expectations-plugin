<?php

namespace Tests\Feature;

it('default home has a successful status code', function () {
    $response = test()->get('/');
    expect($response)->toBeSuccessful();
});

it('offers a Taiwan NT$6,000 tax rebate system instruction file download', function () {
    $response = test()->get('/pdf/tw-2023-6000');
    expect($response)->toBeDownload();
});
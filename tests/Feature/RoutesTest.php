<?php

test('stabililty', function ($url) {
    $this->get($url)->assertOk();
})->with('routes');

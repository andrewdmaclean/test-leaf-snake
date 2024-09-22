<?php

require __DIR__ . '/vendor/autoload.php';

app()->get('/', function () {
    response()->json([
        'apiversion' => '1',
        'author' => 'author-name',
        'color' => '#f22f46',
        'head' => 'default',
        'tail' => 'default',
    ]);
});

app()->post('/start', function () {
    error_log("Game started!");
});


app()->post('/move', function () {
    error_log("Snake on the Move!");
    response()->json(['move' => 'down']);
});

app()->post('/end', function () {
    error_log("Game has ended!");
});

app()->run();

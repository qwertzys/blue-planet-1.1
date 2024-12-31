<?php

// Load the Laravel application
require DIR . '/../vendor/autoload.php';
$app = require_once DIR . '/../bootstrap/app.php';
 
// Run the application
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);
$response->send();
$kernel->terminate($request, $response);
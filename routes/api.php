<?php

declare(strict_types=1);

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Controllers\WebhookController;

Route::get('/healthcheck', function (): JsonResponse {
    return new JsonResponse([
        'status' => 'ok',
        'request' => request(),
    ], Response::HTTP_OK);
});

Route::post('/webhook', WebhookController::class);

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class WebhookController
{
    public function __invoke(Request $request): JsonResponse
    {
        return new JsonResponse(status: Response::HTTP_NO_CONTENT);
    }
}

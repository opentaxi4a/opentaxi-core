<?php

namespace App\Service;

use Symfony\Component\HttpFoundation\JsonResponse;

class Replay
{
    public function operationSuccess(array|string $data = '', string $message = ''): JsonResponse
    {
        return new JsonResponse([
            'code' => 200,
            'success' => true,
            'message' => $message,
            'data' => $data,
        ]);
    }

    public function operationFail(string $message = ''): JsonResponse
    {
        return new JsonResponse([
            'code' => 110,
            'success' => false,
            'message' => $message,
            'data' => '',
        ]);
    }

    public function paramsNotSend(string $message = ''): JsonResponse
    {
        return new JsonResponse([
            'code' => 111,
            'success' => false,
            'message' => $message,
            'data' => '',
        ]);
    }
}

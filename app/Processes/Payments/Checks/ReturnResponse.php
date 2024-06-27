<?php

declare(strict_types=1);

namespace App\Processes\Payments\Checks;

use Closure;
use App\Contracts\DataObject;
use Illuminate\Http\JsonResponse;
use App\Contracts\Processes\Check;
use Symfony\Component\HttpFoundation\Response;

final class ReturnResponse implements Check
{
    public function __invoke(DataObject $payload, Closure $next)
    {
        $message = match ($payload->data()->payment->status->value) {
            'paid' => 'verified',
            'incomplete' => 'verified',
            'initiated' => 'unverified'
        };
        return new JsonResponse(
            data: ['message' => $message],
            status: Response::HTTP_OK
        );
    }
}

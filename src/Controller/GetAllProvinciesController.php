<?php

declare(strict_types=1);

namespace App\Controller;

use React\Promise\FulfilledPromise;
use React\Promise\PromiseInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class GetAllProvinciesController
{
    /**
     * @param Request $request
     * @return PromiseInterface<Response>
     */
    public function __invoke(Request $request): PromiseInterface
    {
        return new FulfilledPromise(
            new JsonResponse([
                'message' => 'DriftPHP is working!',
            ], 200)
        );
    }
}

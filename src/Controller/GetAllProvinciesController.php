<?php

declare(strict_types=1);

namespace App\Controller;

use Domain\Province\ProvinceRepository;
use React\Promise\FulfilledPromise;
use React\Promise\PromiseInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class GetAllProvinciesController
{
    /**
     * @var ProvinceRepository
     */
    private $provinciesRepository;

    public function __construct(
        ProvinceRepository $provinciesRepository
    ){
        $this->provinciesRepository = $provinciesRepository;
    }

    /**
     * @param Request $request
     * @return PromiseInterface<Response>
     */
    public function __invoke(Request $request): PromiseInterface
    {
        return $this
            ->provinciesRepository
            ->findAll()
            ->then(function($provincies) {
                return new JsonResponse($provincies);
            });
    }
}

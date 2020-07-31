<?php

namespace Infrastructure\Province;

use Domain\Province\Province;
use Domain\Province\ProvinceRepository;
use React\Promise\PromiseInterface;

class InMemoryProvinceRepository implements ProvinceRepository
{
    public function findAll(): PromiseInterface
    {
        return \React\Promise\resolve([
            new Province(1, 'AAA'),
            new Province(2, 'BBB'),
            new Province(3, 'CCC'),
            new Province(4, 'DDD')
        ]);
    }
}

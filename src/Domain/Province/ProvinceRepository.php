<?php

namespace Domain\Province;

use React\Promise\PromiseInterface;

interface ProvinceRepository
{
    public function findAll(): PromiseInterface;
}

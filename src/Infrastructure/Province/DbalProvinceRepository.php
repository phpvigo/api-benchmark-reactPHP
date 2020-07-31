<?php

namespace Infrastructure\Province;

use Domain\Province\ProvinceRepository;
use Drift\DBAL\Connection;
use React\Promise\PromiseInterface;

class DbalProvinceRepository implements ProvinceRepository
{
     /**
     * @var string
     */
    const TABLE = 'provincia';

    /**
     * @var Connection
     */
    private $connection;

    public function __construct(Connection $mainConnection)
    {
        $this->connection = $mainConnection;
    }

    public function findAll(): PromiseInterface
    {
        return $this
            ->connection
            ->findBy(self::TABLE);
    }
}

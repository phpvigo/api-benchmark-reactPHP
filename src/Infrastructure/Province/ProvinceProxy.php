<?php

namespace App\Infrastructure\Province;

use Domain\Province\Province;

class ProvinceProxy extends Province
{
    private const MAPPING = [
        'provinciaid' => 'id',
        'provincia' => 'name'
    ];

    public function __construct(array $properties)
    {
        foreach ($properties AS $propertyName => $propertyValue) {
            if (!array_key_exists($propertyName, self::MAPPING)) {
                dump($propertyName);
                continue;
            }

            $reflectionProperty = new \ReflectionProperty(Province::class, self::MAPPING[$propertyName]);
            $reflectionProperty->setAccessible(true);
            $reflectionProperty->setValue($this, $propertyValue);

        }
    }
}
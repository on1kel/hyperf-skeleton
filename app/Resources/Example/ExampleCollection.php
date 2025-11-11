<?php

declare(strict_types=1);

namespace App\Resources\Example;

use App\Model\Example;
use On1kel\HyperfLighty\Http\Resources\CollectionResource;

/**
 * @property array<int, Example>|array<int, array<string,mixed>> $collection
 */
class ExampleCollection extends CollectionResource
{
    /**
     * Оборачиваем элементы в ключ 'data', чтобы ApiController мог корректно извлечь тело.
     *
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'data' => parent::toArray(),
        ];
    }
}

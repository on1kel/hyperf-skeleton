<?php

declare(strict_types=1);

namespace App\Resources\Example;

use App\Model\Example;
use On1kel\HyperfLighty\Http\Resources\SingleResource;

/**
 * @property Example $resource
 */
class ExampleResource extends SingleResource
{
    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return [
            'id'   => $this->resource->id,
            'name' => $this->resource->name,

            // Для «тяжёлых» вычисляемых полей:
            // $this->mergeWhenByClosure($this->hasWith('properties.test'), static function ($ctx) {
            //     return [
            //         // 'test' => $ctx->test,
            //     ];
            // }),

            // Для отношений (избежать N+1):
            // $this->mergeWhenByClosure($this->hasWith('relationships.test'), static function ($ctx) {
            //     return [
            //         // 'test' => $ctx->test,
            //     ];
            // }),

            'created_at' => $this->resource->created_at,
            'updated_at' => $this->resource->updated_at,
            'deleted_at' => $this->resource->deleted_at,
        ];
    }
}

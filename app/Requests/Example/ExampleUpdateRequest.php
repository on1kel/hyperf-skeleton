<?php

declare(strict_types=1);

namespace App\Requests\Example;

use On1kel\HyperfLighty\Http\Requests\BaseRequest;

final class ExampleUpdateRequest extends BaseRequest
{
    /**
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'name' => [
                'required',
                'string',
                'max:255',
            ],
        ];
    }
}



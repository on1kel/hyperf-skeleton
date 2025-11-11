<?php

declare(strict_types=1);

namespace App\Model;

use On1kel\HyperfLighty\Models\Model;
use Hyperf\Database\Model\SoftDeletes;

/**
 * App\Models\Example
 */
final class Example extends Model
{
    use SoftDeletes;

    /**
     * @var array<int,string>
     */
    protected array $fillable = [
        'name',
    ];
}
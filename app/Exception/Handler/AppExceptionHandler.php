<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */

namespace App\Exception\Handler;

use On1kel\HyperfLighty\Exceptions\JsonExceptionHandler;
use Throwable;

class AppExceptionHandler extends JsonExceptionHandler
{

    public function isValid(Throwable $throwable): bool
    {
        return true;
    }
}

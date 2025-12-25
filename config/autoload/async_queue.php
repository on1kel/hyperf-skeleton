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
use Hyperf\AsyncQueue\Driver\RedisDriver;

return [
    'default' => [
        'driver' => RedisDriver::class,
        'redis' => [
            'pool' => 'default', // имя пула Redis из config/autoload/redis.php
        ],
        'channel' => 'queue',  // имя канала в Redis, любое
        'timeout' => 2,              // блокирующий pop, секунды
        'retry_seconds' => 5,        // задержка перед ретраем, можно [1, 5, 10]
        'handle_timeout' => 30,      // таймаут выполнения job
        'processes' => 1,            // КРИТИЧНО: > 0, иначе воркеры не поднимутся
        'concurrent' => [
            'limit' => 5,
        ],
    ],
];

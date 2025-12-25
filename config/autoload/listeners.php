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
use Hyperf\ExceptionHandler\Listener\ErrorExceptionHandler;

/*
 * This file is part of Hyperf.
 *
 * @see     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
return [
    ErrorExceptionHandler::class,
    FriendsOfHyperf\Telescope\Listener\SetRequestLifecycleListener::class,
    FriendsOfHyperf\Telescope\Listener\RequestHandledListener::class,
    FriendsOfHyperf\Telescope\Listener\CommandListener::class,
    FriendsOfHyperf\Telescope\Listener\CronEventListener::class,
    FriendsOfHyperf\Telescope\Listener\ExceptionHandlerListener::class,
    FriendsOfHyperf\Telescope\Listener\RedisCommandExecutedListener::class,
//    FriendsOfHyperf\Telescope\Listener\DbQueryListener::class,
];

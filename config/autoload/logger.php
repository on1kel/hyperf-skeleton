<?php

declare(strict_types=1);

use Monolog\Handler\StreamHandler;
use Monolog\Level;
use On1kel\HyperfLighty\Logger\Formater\AnsiLineFormatter;

$appEnv = env('APP_ENV', 'dev');

if ($appEnv === 'dev') {
    $formatter = [
        'class' => AnsiLineFormatter::class,
        'constructor' => [
            'format' => "[%datetime%] [%channel%] [%level_name%]: %message% %context% %extra%\n",
            'dateFormat' => 'd.m.Y H:i:s',
            'allowInlineLineBreaks' => true,
            'ignoreEmptyContextAndExtra' => true,
        ],
    ];
} else {
    $formatter = [
        'class' => \Monolog\Formatter\JsonFormatter::class,
        'constructor' => [
            'appendNewline' => true,
        ],
    ];
}

return [
    'default' => [
        'handler' => [
            'class' => StreamHandler::class,
            'constructor' => [
                'stream' => 'php://stdout',
                'level' => Level::Info,
            ],
        ],
        'formatter' => $formatter,
    ],
    'error' => [
        'handler' => [
            'class' => StreamHandler::class,
            'constructor' => [
                'stream' => 'php://stderr',
                'level' => Level::Warning,
            ],
        ],
        'formatter' => $formatter,
    ],
];

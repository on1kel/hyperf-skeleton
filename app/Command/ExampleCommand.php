<?php

declare(strict_types=1);

namespace App\Command;

use Hyperf\Command\Annotation\Command;
use Hyperf\Command\Command as HyperfCommand;

#[Command]
class ExampleCommand extends HyperfCommand
{
    /**
     * The command
     *
     * @var string
     */
    protected ?string $name = 'example:hello';

    public function handle(): void
    {
        // Output Hello Hyperf. in the Console via the built-in method line()
        $this->line('Hello Hyperf.', 'info');
    }
}
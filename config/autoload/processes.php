<?php
declare(strict_types=1);

use Hyperf\Di\ReflectionManager;
use On1kel\HyperfLighty\Attributes\Process\DeployRoles;
use function Hyperf\Support\env;


$rolesEnv = env('APP_ROLES', 'api');
$enabledRoles = array_values(array_filter(array_map('trim', explode(',', $rolesEnv))))
    ?: ['api'];

$registry = require __DIR__ . '/process_registry.php';

$enabled = [];

foreach ($registry as $key => $value) {
    if (is_string($key) && is_array($value)) {
        if (array_intersect($enabledRoles, $value)) {
            $enabled[] = $key;
        }
        continue;
    }

    $class = $value;

    $ref = ReflectionManager::reflectClass($class);
    $attrs = $ref->getAttributes(DeployRoles::class);

    if ($attrs === []) {
        $enabled[] = $class;
        continue;
    }

    /** @var DeployRoles $roles */
    $roles = $attrs[0]->newInstance();
    if (array_intersect($enabledRoles, $roles->roles)) {
        $enabled[] = $class;
    }
}

return $enabled;


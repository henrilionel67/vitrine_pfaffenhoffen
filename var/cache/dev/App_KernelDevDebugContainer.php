<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container3gkOxWA\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container3gkOxWA/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container3gkOxWA.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container3gkOxWA\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container3gkOxWA\App_KernelDevDebugContainer([
    'container.build_hash' => '3gkOxWA',
    'container.build_id' => 'accc4e58',
    'container.build_time' => 1588967719,
], __DIR__.\DIRECTORY_SEPARATOR.'Container3gkOxWA');

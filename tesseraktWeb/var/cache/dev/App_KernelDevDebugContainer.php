<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerWeA9pKn\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerWeA9pKn/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerWeA9pKn.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerWeA9pKn\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerWeA9pKn\App_KernelDevDebugContainer([
    'container.build_hash' => 'WeA9pKn',
    'container.build_id' => 'f1f3ab72',
    'container.build_time' => 1589153985,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerWeA9pKn');

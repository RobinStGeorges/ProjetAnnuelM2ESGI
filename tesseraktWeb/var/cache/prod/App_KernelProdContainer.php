<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerO0fmdNs\App_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerO0fmdNs/App_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerO0fmdNs.legacy');

    return;
}

if (!\class_exists(App_KernelProdContainer::class, false)) {
    \class_alias(\ContainerO0fmdNs\App_KernelProdContainer::class, App_KernelProdContainer::class, false);
}

return new \ContainerO0fmdNs\App_KernelProdContainer([
    'container.build_hash' => 'O0fmdNs',
    'container.build_id' => '2e069373',
    'container.build_time' => 1588987694,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerO0fmdNs');
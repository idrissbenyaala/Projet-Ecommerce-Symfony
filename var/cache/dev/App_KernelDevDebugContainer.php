<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerW6OHX34\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerW6OHX34/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerW6OHX34.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerW6OHX34\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerW6OHX34\App_KernelDevDebugContainer([
    'container.build_hash' => 'W6OHX34',
    'container.build_id' => '94d8d587',
    'container.build_time' => 1706831196,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerW6OHX34');

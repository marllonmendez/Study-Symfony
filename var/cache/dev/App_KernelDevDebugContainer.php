<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerBgck47f\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerBgck47f/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerBgck47f.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerBgck47f\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerBgck47f\App_KernelDevDebugContainer([
    'container.build_hash' => 'Bgck47f',
    'container.build_id' => '8d8cd385',
    'container.build_time' => 1670529298,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerBgck47f');

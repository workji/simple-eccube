<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJeLjmue\Eccube_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJeLjmue/Eccube_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerJeLjmue.legacy');

    return;
}

if (!\class_exists(Eccube_KernelProdContainer::class, false)) {
    \class_alias(\ContainerJeLjmue\Eccube_KernelProdContainer::class, Eccube_KernelProdContainer::class, false);
}

return new \ContainerJeLjmue\Eccube_KernelProdContainer([
    'container.build_hash' => 'JeLjmue',
    'container.build_id' => '1ddc66ea',
    'container.build_time' => 1708059673,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerJeLjmue');
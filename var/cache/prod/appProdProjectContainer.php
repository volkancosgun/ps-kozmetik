<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerKhgkrrw\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerKhgkrrw/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerKhgkrrw.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerKhgkrrw\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerKhgkrrw\appProdProjectContainer(array(
    'container.build_hash' => 'Khgkrrw',
    'container.build_id' => 'f839e6f6',
    'container.build_time' => 1532189375,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerKhgkrrw');

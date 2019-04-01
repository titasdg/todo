<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit54c2a2e850458e0b9b673e0d477c0f3f
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tasker\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tasker\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit54c2a2e850458e0b9b673e0d477c0f3f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit54c2a2e850458e0b9b673e0d477c0f3f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}

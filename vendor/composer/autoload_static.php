<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit252ec95d4b61e05ef9dcaeb81ccd1b39
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 
            array (
                0 => __DIR__ . '/..' . '/psr/log',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit252ec95d4b61e05ef9dcaeb81ccd1b39::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit252ec95d4b61e05ef9dcaeb81ccd1b39::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit252ec95d4b61e05ef9dcaeb81ccd1b39::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}

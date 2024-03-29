<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit501822c43cd307095a59d2580c616c63
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Lenovo\\Composer\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Lenovo\\Composer\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit501822c43cd307095a59d2580c616c63::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit501822c43cd307095a59d2580c616c63::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit501822c43cd307095a59d2580c616c63::$classMap;

        }, null, ClassLoader::class);
    }
}

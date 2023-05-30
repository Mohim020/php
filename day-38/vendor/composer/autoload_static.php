<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit09bd12f432c95b8b6aa6414a42c6c05f
{
    public static $files = array (
        '83f89a6563b16f5efed043dca4f94599' => __DIR__ . '/../..' . '/app/helpers/helper.php',
    );

    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit09bd12f432c95b8b6aa6414a42c6c05f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit09bd12f432c95b8b6aa6414a42c6c05f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit09bd12f432c95b8b6aa6414a42c6c05f::$classMap;

        }, null, ClassLoader::class);
    }
}

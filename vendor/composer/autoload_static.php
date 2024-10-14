<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit72091d785e11f2c539771cc1672fd710
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MonVendor\\MonPackage\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MonVendor\\MonPackage\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit72091d785e11f2c539771cc1672fd710::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit72091d785e11f2c539771cc1672fd710::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit72091d785e11f2c539771cc1672fd710::$classMap;

        }, null, ClassLoader::class);
    }
}

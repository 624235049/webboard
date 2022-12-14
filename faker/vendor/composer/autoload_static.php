<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit31e4c4d1890864e22c709134fee5551c
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Faker\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Faker\\' => 
        array (
            0 => __DIR__ . '/..' . '/fzaninotto/faker/src/Faker',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit31e4c4d1890864e22c709134fee5551c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit31e4c4d1890864e22c709134fee5551c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit31e4c4d1890864e22c709134fee5551c::$classMap;

        }, null, ClassLoader::class);
    }
}

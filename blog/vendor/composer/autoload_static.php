<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit04d7aa06f3eb36c2fb9407ef7fb82e6e
{
    public static $files = array (
        '6e3fae29631ef280660b3cdad06f25a8' => __DIR__ . '/..' . '/symfony/deprecation-contracts/function.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Container\\' => 14,
        ),
        'G' => 
        array (
            'GeekBrains\\LevelTwo\\' => 20,
        ),
        'F' => 
        array (
            'Faker\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'GeekBrains\\LevelTwo\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Faker\\' => 
        array (
            0 => __DIR__ . '/..' . '/fakerphp/faker/src/Faker',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit04d7aa06f3eb36c2fb9407ef7fb82e6e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit04d7aa06f3eb36c2fb9407ef7fb82e6e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit04d7aa06f3eb36c2fb9407ef7fb82e6e::$classMap;

        }, null, ClassLoader::class);
    }
}
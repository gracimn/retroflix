<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite0499eee941ce071119dfbda6506e7e7
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Retroflix\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Retroflix\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite0499eee941ce071119dfbda6506e7e7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite0499eee941ce071119dfbda6506e7e7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite0499eee941ce071119dfbda6506e7e7::$classMap;

        }, null, ClassLoader::class);
    }
}
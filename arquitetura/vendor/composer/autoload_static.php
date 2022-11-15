<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5b4790a9488ad3441c55ba3d7f0e2778
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'Gabriel\\Arquitetura\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Gabriel\\Arquitetura\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit5b4790a9488ad3441c55ba3d7f0e2778::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5b4790a9488ad3441c55ba3d7f0e2778::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5b4790a9488ad3441c55ba3d7f0e2778::$classMap;

        }, null, ClassLoader::class);
    }
}
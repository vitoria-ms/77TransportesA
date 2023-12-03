<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb899ac915106765ff8e8fd78ddc69b8b
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Transportes\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Transportes\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitb899ac915106765ff8e8fd78ddc69b8b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb899ac915106765ff8e8fd78ddc69b8b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb899ac915106765ff8e8fd78ddc69b8b::$classMap;

        }, null, ClassLoader::class);
    }
}

<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitb899ac915106765ff8e8fd78ddc69b8b
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitb899ac915106765ff8e8fd78ddc69b8b', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitb899ac915106765ff8e8fd78ddc69b8b', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitb899ac915106765ff8e8fd78ddc69b8b::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
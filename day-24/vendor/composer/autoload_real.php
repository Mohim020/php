<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit665549b1d1e5b251ec6f162b3eeeb771
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

        spl_autoload_register(array('ComposerAutoloaderInit665549b1d1e5b251ec6f162b3eeeb771', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit665549b1d1e5b251ec6f162b3eeeb771', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit665549b1d1e5b251ec6f162b3eeeb771::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}

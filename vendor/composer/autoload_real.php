<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit3a3f15ce94d2d141e0671a6c65c3653a
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

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInit3a3f15ce94d2d141e0671a6c65c3653a', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit3a3f15ce94d2d141e0671a6c65c3653a', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit3a3f15ce94d2d141e0671a6c65c3653a::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}

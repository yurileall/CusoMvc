<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit7db84d9dba8c665b1e0c234d02d00bcc
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

        spl_autoload_register(array('ComposerAutoloaderInit7db84d9dba8c665b1e0c234d02d00bcc', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit7db84d9dba8c665b1e0c234d02d00bcc', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit7db84d9dba8c665b1e0c234d02d00bcc::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}

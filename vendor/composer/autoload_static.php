<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf5f206bdf3a43fe05ca714afad9f5ad9
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Component\\Yaml\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Component\\Yaml\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/yaml',
        ),
    );

    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
    );

    public static $classMap = array (
        'IdiormMethodMissingException' => __DIR__ . '/..' . '/j4mie/idiorm/idiorm.php',
        'IdiormResultSet' => __DIR__ . '/..' . '/j4mie/idiorm/idiorm.php',
        'IdiormString' => __DIR__ . '/..' . '/j4mie/idiorm/idiorm.php',
        'IdiormStringException' => __DIR__ . '/..' . '/j4mie/idiorm/idiorm.php',
        'ORM' => __DIR__ . '/..' . '/j4mie/idiorm/idiorm.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf5f206bdf3a43fe05ca714afad9f5ad9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf5f206bdf3a43fe05ca714afad9f5ad9::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitf5f206bdf3a43fe05ca714afad9f5ad9::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitf5f206bdf3a43fe05ca714afad9f5ad9::$classMap;

        }, null, ClassLoader::class);
    }
}

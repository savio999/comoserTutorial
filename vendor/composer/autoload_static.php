<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita7e946101dcce8736abee62357a0b25b
{
    public static $files = array (
        '5255c38a0faeba867671b61dfda6d864' => __DIR__ . '/..' . '/paragonie/random_compat/lib/random.php',
        '72579e7bd17821bb1321b87411366eae' => __DIR__ . '/..' . '/illuminate/support/helpers.php',
        '4b8adfbe576b11960eac27bf16ad1a99' => __DIR__ . '/../..' . '/app/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Illuminate\\Support\\' => 19,
            'Illuminate\\Contracts\\' => 21,
            'Illuminate\\Container\\' => 21,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Illuminate\\Support\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/support',
        ),
        'Illuminate\\Contracts\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/contracts',
        ),
        'Illuminate\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/illuminate/container',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $prefixesPsr0 = array (
        'D' => 
        array (
            'Doctrine\\Common\\Inflector\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/inflector/lib',
            ),
        ),
    );

    public static $classMap = array (
        'Any\\class3' => __DIR__ . '/../..' . '/app/classes/subfolder/class3.php',
        'class1' => __DIR__ . '/../..' . '/app/classes/class1.php',
        'class2' => __DIR__ . '/../..' . '/app/classes/class2.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita7e946101dcce8736abee62357a0b25b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita7e946101dcce8736abee62357a0b25b::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInita7e946101dcce8736abee62357a0b25b::$prefixesPsr0;
            $loader->classMap = ComposerStaticInita7e946101dcce8736abee62357a0b25b::$classMap;

        }, null, ClassLoader::class);
    }
}

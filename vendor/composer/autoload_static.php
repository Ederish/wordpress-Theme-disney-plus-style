<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit34c36c05260b7e8e8b2fbced22e7ef39
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Instagram\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Instagram\\' => 
        array (
            0 => __DIR__ . '/..' . '/jstolpe/instagram-graph-api-php-sdk/src/Instagram',
        ),
    );

    public static $prefixesPsr0 = array (
        'B' => 
        array (
            'Bramus' => 
            array (
                0 => __DIR__ . '/..' . '/bramus/router/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit34c36c05260b7e8e8b2fbced22e7ef39::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit34c36c05260b7e8e8b2fbced22e7ef39::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit34c36c05260b7e8e8b2fbced22e7ef39::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit34c36c05260b7e8e8b2fbced22e7ef39::$classMap;

        }, null, ClassLoader::class);
    }
}

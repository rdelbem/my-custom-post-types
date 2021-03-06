<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit81f916b90b02b4143afa5961bdf18116
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MCPT\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MCPT\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit81f916b90b02b4143afa5961bdf18116::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit81f916b90b02b4143afa5961bdf18116::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}

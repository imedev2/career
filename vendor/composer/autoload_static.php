<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitda5e484ca0fce7c651792f47a74f3360
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Imedev2\\Career\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Imedev2\\Career\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitda5e484ca0fce7c651792f47a74f3360::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitda5e484ca0fce7c651792f47a74f3360::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
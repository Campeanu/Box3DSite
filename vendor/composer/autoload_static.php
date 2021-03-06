<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2e564aa120d64c0e9fce3deb2d0107ce
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2e564aa120d64c0e9fce3deb2d0107ce::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2e564aa120d64c0e9fce3deb2d0107ce::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}

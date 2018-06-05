<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita9baae69663e02dfc7a240fc63108bec
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'DesignPatterns\\' => 15,
        ),
        'B' => 
        array (
            'BuilderDemo\\' => 12,
        ),
        'A' => 
        array (
            'AbstractFactoryDemo\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'DesignPatterns\\' => 
        array (
            0 => __DIR__ . '/../..' . '/DesignPatternsPHP',
        ),
        'BuilderDemo\\' => 
        array (
            0 => __DIR__ . '/../..' . '/BuilderDemo',
        ),
        'AbstractFactoryDemo\\' => 
        array (
            0 => __DIR__ . '/../..' . '/AbstractFactoryDemo',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita9baae69663e02dfc7a240fc63108bec::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita9baae69663e02dfc7a240fc63108bec::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}

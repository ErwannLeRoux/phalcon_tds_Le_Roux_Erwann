<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1debda2cdbe93c853c51456a1fbaf1f6
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Ajax\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ajax\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmv/php-mv-ui/Ajax',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1debda2cdbe93c853c51456a1fbaf1f6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1debda2cdbe93c853c51456a1fbaf1f6::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}

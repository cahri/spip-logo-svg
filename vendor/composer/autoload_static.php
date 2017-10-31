<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit33493d7582a1f8006c6ae7706f51d64f
{
    public static $prefixLengthsPsr4 = array (
        'e' => 
        array (
            'enshrined\\svgSanitize\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'enshrined\\svgSanitize\\' => 
        array (
            0 => __DIR__ . '/..' . '/enshrined/svg-sanitize/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit33493d7582a1f8006c6ae7706f51d64f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit33493d7582a1f8006c6ae7706f51d64f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
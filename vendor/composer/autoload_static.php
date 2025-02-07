<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita4516623e92c1aa5092fa4eec86b6d9b
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita4516623e92c1aa5092fa4eec86b6d9b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita4516623e92c1aa5092fa4eec86b6d9b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita4516623e92c1aa5092fa4eec86b6d9b::$classMap;

        }, null, ClassLoader::class);
    }
}

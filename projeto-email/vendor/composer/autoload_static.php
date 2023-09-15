<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit95990a9d1382ae8e5e21621356c0d48b
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'F' => 
        array (
            'Flademir\\Saulo\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'Flademir\\Saulo\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit95990a9d1382ae8e5e21621356c0d48b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit95990a9d1382ae8e5e21621356c0d48b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit95990a9d1382ae8e5e21621356c0d48b::$classMap;

        }, null, ClassLoader::class);
    }
}

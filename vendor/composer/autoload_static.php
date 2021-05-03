<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit66aa625b4433d4d8cc7d41d0729ec24e
{
    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'classes\\' => 8,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'classes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/../classes',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Main_New_Walker' => __DIR__ . '/../..' . '/classes/Main_New_Walker.php',
        'classes\\Preg' => __DIR__ . '/../..' . '/classes/Preg.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit66aa625b4433d4d8cc7d41d0729ec24e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit66aa625b4433d4d8cc7d41d0729ec24e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit66aa625b4433d4d8cc7d41d0729ec24e::$classMap;

        }, null, ClassLoader::class);
    }
}

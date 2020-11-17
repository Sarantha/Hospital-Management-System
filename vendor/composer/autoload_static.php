<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8f2924bcb5e97076a9c3a7af04428515
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8f2924bcb5e97076a9c3a7af04428515::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8f2924bcb5e97076a9c3a7af04428515::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}

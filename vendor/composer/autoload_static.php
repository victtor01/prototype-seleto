<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8ded149761c0fa11ab4ba04abec62628
{
    public static $files = array (
        'f0155146ea5a65a1c882c8f6a7281bd8' => __DIR__ . '/../..' . '/app/router/router.php',
        '4ec14c21a2631980e0360a1295e8a7b5' => __DIR__ . '/../..' . '/app/core/controller.php',
        '9d4f09cd902dcd38e0d83550f6464767' => __DIR__ . '/../..' . '/app/helpers/constants.php',
        '2edd053cd0c5145738a4dc1b215a9ee0' => __DIR__ . '/../..' . '/app/helpers/redirect.php',
        'b78ed1efeac9e3bf3e4630f767b99c53' => __DIR__ . '/../..' . '/app/helpers/valideSession.php',
        'eb8956b6c103d2b5656c8581f5f2a792' => __DIR__ . '/../..' . '/app/database/connect.php',
        '4c79936c1bdd242b5f42ee4dffbe4015' => __DIR__ . '/../..' . '/app/database/fetch.php',
    );

    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'app\\controllers\\Home' => __DIR__ . '/../..' . '/app/controllers/Home.php',
        'app\\controllers\\Login' => __DIR__ . '/../..' . '/app/controllers/Login.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8ded149761c0fa11ab4ba04abec62628::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8ded149761c0fa11ab4ba04abec62628::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8ded149761c0fa11ab4ba04abec62628::$classMap;

        }, null, ClassLoader::class);
    }
}

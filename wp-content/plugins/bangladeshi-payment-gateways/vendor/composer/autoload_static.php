<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc9b7e72af7dbd4723b61bfa3c7482494
{
    public static $files = array (
        'b4c61c4e51dc5b30b9667984a726c468' => __DIR__ . '/../..' . '/includes/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'u' => 
        array (
            'ultraDevs\\BDPG\\' => 15,
        ),
        'A' => 
        array (
            'Appsero\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ultraDevs\\BDPG\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
        'Appsero\\' => 
        array (
            0 => __DIR__ . '/..' . '/appsero/client/src',
        ),
    );

    public static $classMap = array (
        'Appsero\\Client' => __DIR__ . '/..' . '/appsero/client/src/Client.php',
        'Appsero\\Insights' => __DIR__ . '/..' . '/appsero/client/src/Insights.php',
        'Appsero\\License' => __DIR__ . '/..' . '/appsero/client/src/License.php',
        'Appsero\\Updater' => __DIR__ . '/..' . '/appsero/client/src/Updater.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'ultraDevs\\BDPG\\Activate' => __DIR__ . '/../..' . '/includes/Activate.php',
        'ultraDevs\\BDPG\\Assets_Manager' => __DIR__ . '/../..' . '/includes/Assets_Manager.php',
        'ultraDevs\\BDPG\\Gateways\\Bkash' => __DIR__ . '/../..' . '/includes/Gateways/Bkash.php',
        'ultraDevs\\BDPG\\Gateways\\Nagad' => __DIR__ . '/../..' . '/includes/Gateways/Nagad.php',
        'ultraDevs\\BDPG\\Gateways\\Rocket' => __DIR__ . '/../..' . '/includes/Gateways/Rocket.php',
        'ultraDevs\\BDPG\\Gateways\\Upay' => __DIR__ . '/../..' . '/includes/Gateways/Upay.php',
        'ultraDevs\\BDPG\\Helper' => __DIR__ . '/../..' . '/includes/Helper.php',
        'ultraDevs\\BDPG\\Review' => __DIR__ . '/../..' . '/includes/Review.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc9b7e72af7dbd4723b61bfa3c7482494::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc9b7e72af7dbd4723b61bfa3c7482494::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc9b7e72af7dbd4723b61bfa3c7482494::$classMap;

        }, null, ClassLoader::class);
    }
}
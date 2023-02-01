<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit27da7cbd56e3b48360857b86758d86f6
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'UltraMsg\\WhatsAppApi' => __DIR__ . '/..' . '/ultramsg/whatsapp-php-sdk/ultramsg.class.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit27da7cbd56e3b48360857b86758d86f6::$classMap;

        }, null, ClassLoader::class);
    }
}

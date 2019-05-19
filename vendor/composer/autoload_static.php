<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5b47797d93ab14c513e8dc25d29a6cad
{
    public static $classMap = array (
        'ComposerAutoloaderInit5b47797d93ab14c513e8dc25d29a6cad' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit5b47797d93ab14c513e8dc25d29a6cad' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Config' => __DIR__ . '/../..' . '/Config/Config.php',
        'Helper' => __DIR__ . '/../..' . '/helper.php',
        'Instructor\\Controller' => __DIR__ . '/../..' . '/Instructor/Controller.php',
        'Instructor\\Instructor' => __DIR__ . '/../..' . '/Instructor/Instructor.php',
        'Login\\Controller' => __DIR__ . '/../..' . '/Login/Controller.php',
        'Login\\Login' => __DIR__ . '/../..' . '/Login/Login.php',
        'Student\\Controller' => __DIR__ . '/../..' . '/Student/Controller.php',
        'Student\\Student' => __DIR__ . '/../..' . '/Student/Student.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit5b47797d93ab14c513e8dc25d29a6cad::$classMap;

        }, null, ClassLoader::class);
    }
}

<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitedfbda6fc828bd8ea6aced7d3b904ffd
{
    public static $classMap = array (
        'Yii' => __DIR__ . '/..' . '/yiisoft/yii/framework/yii.php',
        'YiiBase' => __DIR__ . '/..' . '/yiisoft/yii/framework/YiiBase.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitedfbda6fc828bd8ea6aced7d3b904ffd::$classMap;

        }, null, ClassLoader::class);
    }
}

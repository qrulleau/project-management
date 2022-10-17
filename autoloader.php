<?php

class Autoloader
{
    public static function register()
    {
        spl_autoload_register(function ($classe) {
            if (strpos($classe, 'App\\') === 0)
            {
                $class = substr_replace($classe, 'classes', 0, 3);
                $class = __DIR__.'\\'.$class;
            }

            if (strpos($classe, 'App\\') === 0)
            {
                $class = substr_replace($classe, 'interface', 0, 3);
                $class = __DIR__.'\\'.$class;
            }
            
            $file = str_replace('\\', DIRECTORY_SEPARATOR, $class).'.php';
            if (file_exists($file)) {
                require $file;
                return true;
            }
            return false;
        });
    }
}

Autoloader::register();
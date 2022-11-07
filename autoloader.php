<?php

class Autoloader
{
    public static function register()
    {
        spl_autoload_register(function ($classe) {
            

            if (strpos($classe, 'Classes\\') === 0)
            {
                $classe = substr_replace($classe, 'cla', 0, 3);
                $classe = __DIR__.'\\'.$classe;
                // var_dump($classe);
            }

            // if (strpos($classe, 'Classes\\') === 0)
            // {
            //     var_dump($classe);
            //     $classe = substr_replace($classe, 'interface', 0, 3);
            //     $classe = __DIR__.'\\'.$classe;
            // }
            
            $file = str_replace('\\', DIRECTORY_SEPARATOR, $classe).'.php';


            if (file_exists($file)) {
                require $file;
                return true;
                var_dump("bonjour");
            }
            return false;

        });
    }
}

Autoloader::register();
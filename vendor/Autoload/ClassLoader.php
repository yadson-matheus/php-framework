<?php 
	namespace Autoload;

    class ClassLoader {
        public static function load(array $paths) {
			spl_autoload_register(function($namespace) use ($paths) {
                foreach ($paths as $path) {
                    $file = $path.str_replace('\\', DS, $namespace).'.php';
        
                    if (file_exists($file)) require_once $file;
                }
            });
		}
	}
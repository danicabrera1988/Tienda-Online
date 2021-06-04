<?php

 function controllers_autoload($classname){ // Generalmente se colca: app_autoloader
     require_once 'controllers/'.$classname.'.php';
 }

spl_autoload_register('controllers_autoload'); // Busca todas las 'clases' en la direccion definida

?>

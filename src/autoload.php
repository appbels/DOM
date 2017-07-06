<?php
/**
 * DOM autoloader file.
 *
 * Date:		2017/07/01
 *
 * @author      AppBels    <app.bels@gmail.com>
 * @name        DOMAutoload
 * @package     DOM
 */

/**
 * Package DOM Autoloader
 *
 * @param 	string	$classname
 */
function DOMAutoload ($classname)
{
	if (strpos($classname, "DOM") !== 0){ return; }

	$ext = array(".class.php", ".interface.php", ".abstract.php", ".trait.php", ".php");
	$class = str_replace("\\", "/", $classname);
	$path = dirname(__FILE__)."/{$class}";
	$len = count($ext);

	for ($i = 0; $i < $len; $i++){
		$file = $path.$ext[$i];
		if (file_exists($file)){
			require_once $file;
			break;
		}
	}

}

spl_autoload_register("DOMAutoload");

?>
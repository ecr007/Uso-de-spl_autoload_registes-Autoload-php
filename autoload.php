<?php

	use Fauna\Animal as Pi;
	use Civilizacion\Persona;
	
	// Solo para cargar clases sin namespace
	//function autoload($class){
	//	include $class.".php";
	//}
	//
	//spl_autoload_register('autoload');

	// Solo para cargar clases con namespace
	spl_autoload_register(function($class){
		include str_replace("\\", "/", $class).'.php';
	});

	$obj = new Pi();
	$obj->msj("Cow");

	$obj = new Persona();
	$obj->msj("John Doe");


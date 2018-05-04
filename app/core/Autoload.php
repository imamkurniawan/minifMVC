<?php

// Load library
spl_autoload_register(function ($class) {
    include_once "../app/lib/".$class.".php";
});

// load helpers
$dir = new class_file("../app/helpers/");
$helpers = $dir->file_property;
foreach($helpers as $files){
	include_once "../app/helpers/". $files['filename'];
}

// load config
$dir = new class_file("../app/conf/");
$conf = $dir->file_property;
foreach($conf as $files){
	include_once "../app/conf/".$files['filename'];
}

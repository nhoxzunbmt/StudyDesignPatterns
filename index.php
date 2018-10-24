<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require __DIR__ . '/vendor/autoload.php';



$dirs = array_filter(glob('App/*'), 'is_dir');

foreach ( $dirs as $dir ) {
	$href = '/'.$dir;

	echo "<a href='{$href}'>{$dir}</a><br>";

}



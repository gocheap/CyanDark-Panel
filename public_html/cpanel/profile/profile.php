<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);

$token = 'fRedre8hAYuduC2uRecr4bRUguvazEra';

if($token == $_GET['tk']){
$image = $_GET['id'];

header( "Content-type: image/jpeg" );

if (file_exists('img/'.$image.'.jpg')) {
    $file = file_get_contents('img/'.$image.'.jpg');
	echo $file;
} else {
    $file = file_get_contents('default.jpg');
	echo $file;
}

}

?>
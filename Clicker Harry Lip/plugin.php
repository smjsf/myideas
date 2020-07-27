<?php

$plugin = ['plugin/code.php'];
$admin = '1223703841'; //ایدی عددی بذار

foreach($plugin as $file){
    include($file);
}

<?php

echo '<pre>';
var_dump($_SERVER['HTTP_HOST'].substr($_SERVER['SCRIPT_NAME'], 0, strrpos($_SERVER['SCRIPT_NAME'], '/')).'/');
echo '</pre>';



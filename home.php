<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/hrcms/resource/php/class/core/init.php';

$user = new User();
echo $user->data()->name;
 ?>

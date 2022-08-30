<?php
$hours = 7 * 24 * 60 * 60;
unset($_COOKIE);
setcookie('admin',NULL,time()-$hours,'/');
setcookie('customer',NULL,time()-$hours,'/');
header('location:index.php');
exit();
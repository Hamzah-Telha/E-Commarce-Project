<?php
if (! isset($_COOKIE['customer'])) {
	header('Location: ../../login/index.php');
}
elseif(isset($_COOKIE['customer']))
{
    header('Location: informationPage/productInfo.php');
}
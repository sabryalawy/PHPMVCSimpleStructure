
<?php
require_once './Config/Rqouered.php';

$url=$_SERVER['REQUEST_URI'];
$ArrUrl= array_slice(explode("/", $url),2);


$app=new App($ArrUrl);

?>
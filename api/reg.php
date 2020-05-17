<?php
include_once ("../base.php");
$_POST['pw'] = md5($_POST['pw']);
save("user",$_POST);
?>
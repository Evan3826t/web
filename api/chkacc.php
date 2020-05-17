<?php
include_once ("../base.php");

$acc = $_POST['acc'];
$chk = nums("user", ['acc'=>$acc]);

// 確認帳號有無存在
if($chk>0){
    $_SESSION['user']=$acc;
    echo 1;
}else{
    echo 0;
}
?>
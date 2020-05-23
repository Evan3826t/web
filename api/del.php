<?php

include_once ("../base.php");

// 刪除檔案
if($_POST['table'] == "image"){
    $d=find("image",$_POST['id']);
    unlink("../images/".$d['image']);
}
// 刪除資料
del($_POST['table'],$_POST['id']);

?>
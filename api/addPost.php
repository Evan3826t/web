<?php
include_once ("../base.php");
$_POST['user_id'] = find("user",['acc' => $_SESSION['user']])['id'];
save("post",$_POST);
print_r($_POST);
to("../admin.php");
?>
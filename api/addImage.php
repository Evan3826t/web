<?php
include_once ("../base.php");
$_POST['user_id'] = find("user",['acc' => $_SESSION['user']])['id'];

if(!empty($_FILES['image']['tmp_name'])){
    $_POST['image'] = $_FILES['image']['name'];
    move_uploaded_file($_FILES['image']['tmp_name'], "../images/" . $_POST['image']);
}
print_r($_POST);
save("image",$_POST);
// to("../admin.php?do=image");
?>
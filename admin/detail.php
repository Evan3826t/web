<?php
$post = find("post",['id' => $_GET['id']]);
if(empty( $post)){
  to("?do=post");
}
?>
<h1 class="text-center"><?=$post['title']?></h1>
<?=$post['content']?>
<div class="text-center">
  <a href="?do=editPost&id=<?=$post['id']?>" class="btn btn-primary">編輯</a>
  <button class="btn btn-danger" onclick="del('post',<?=$post['id']?>)">刪除</button>
  <a href="admin.php" class="btn btn-primary">取消</a>
</div>
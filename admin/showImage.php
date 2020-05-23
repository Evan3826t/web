<?php
$image = find("image",['id' => $_GET['id']]);
?>
<h1 class="text-center"><?=$image['name']?></h1>
<img src="./images/<?=$image['image']?>" alt="圖片遺失">
<div>圖片網址</div>
<div><?="http://".$_SERVER['HTTP_HOST'] . "/web work/images/" . $image['image']?></div>
<div class="text-center">
  <button class="btn btn-danger" onclick="del('image',<?=$image['id']?>)">刪除</button>
  <a href="admin.php?do=image" class="btn btn-primary">取消</a>
</div>
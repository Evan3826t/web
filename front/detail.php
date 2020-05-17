<?php
$post = find("post",['id' => $_GET['id']]);
?>

<div class="container mb-5 rounded" id="content" style="background:#7373B9">
    <div class="row mt-5" >
        <div class="col-12 my-4 text-white">
          <h1 class="text-center"><?=$post['title']?></h1>
          <?=$post['content']?>
          <div class="text-center">
            <a href="index.php" class="btn btn-primary">返回</a>
          </div>
        </div>
    </div>
</div>
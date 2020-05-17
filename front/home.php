<?php
$posts = all("post");
?>
<div class="container mb-5 rounded" id="content" style="background:#7373B9">
    <div class="row mt-5" >
        <div class="col-12 my-4 text-white text-center">
        <?php
        foreach ($posts as $k => $post) {
          ?>
          <h1><a href="?do=detail&id=<?=$post['id']?>"><?=$post['title']?></a></h1>
          <?php
        }
        ?>
        </div>
    </div>
</div>
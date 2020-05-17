<?php
$post = find("post", ['id' => $_GET['id']]);
?>
<div class="form-group">
    <form action="./api/addPost.php" method="post">
        <div class="text-left pb-3 col-xs-4">
            <label for="title">標題</label>
            <input type="hidden" name="id" value="<?=$post['id']?>">
            <input type="text" name="title" id="title" class="form-control" value="<?=$post['title']?>">
        </div>
        <div class="text-left pb-3">
            <label for="content">內容</label>
            <textarea name="content" id="content" class="ckeditor " cols="30" rows="10"><?=$post['content']?></textarea>
        </div>
        <input type="submit" value="修改">
        <input type="button" value="取消" onclick="lof('admin.php')">
    </form>
</div>

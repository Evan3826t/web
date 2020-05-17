<div class="form-group">
    <form action="./api/addPost.php" method="post">
        <div class="text-left pb-3 col-xs-4">
            <label for="title">標題</label>
            <input type="text" name="title" id="title" class="form-control">
        </div>
        <div class="text-left pb-3">
            <label for="content">內容</label>
            <textarea name="content" id="content" class="ckeditor " cols="30" rows="10"></textarea>
        </div>
        <input type="submit" value="新增">
        <input type="button" value="取消" onclick="lof('admin.php')">
    </form>
</div>

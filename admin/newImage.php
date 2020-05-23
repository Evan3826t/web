<div class="form-group">
    <form action="./api/addImage.php" method="post" enctype="multipart/form-data">
        <div class="text-left pb-3 col-xs-4">
            <label for="name">圖片名稱</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>
        <div class="text-left pb-3">
            <label for="content">上傳圖片</label>
            <input type="file" name="image" id="image">
        </div>
        <input type="submit" value="新增">
        <input type="button" value="取消" onclick="lof('admin.php?do=image')">
    </form>
</div>

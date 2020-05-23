<div class="pb-3"><a href="?do=newImage" class="btn btn-primary">新增圖片</a></div>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col" width="10%">排序</th>
      <th scope="col" width="30%">圖片名稱</th>
      <th scope="col" width="20%">上傳者</th>
      <th scope="col" width="">上傳時間</th>
      <th scope="col" width="">操作</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $images = all("image", [], " order by date desc");
    foreach ($images as $key => $image) {
        $user = find("user",['id' => $image['user_id']])['acc'];
        ?>
        <tr>
          <th scope="row"><?=( $key + 1 )?></th>
          <td><?=$image['name']?></td>
          <td><?=$user?></td>
          <td><?=$image['date']?></td>
          <td>
              <a href="?do=showImage&id=<?=$image['id']?>" class="btn btn-primary">詳細</a>
              <button class="btn btn-primary" onclick="del('image',<?=$image['id']?>)">刪除</button>
          </td>
        </tr>
        <?php
        }
    ?>
  </tbody>
</table>

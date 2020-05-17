<div class="pb-3"><a href="?do=newPost" class="btn btn-primary">新增貼文</a></div>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col" width="10%">排序</th>
      <th scope="col" width="30%">標題</th>
      <th scope="col" width="20%">作者</th>
      <th scope="col" width="">上傳時間</th>
      <th scope="col" width="">操作</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $posts = all("post", [], " order by date desc");
    foreach ($posts as $key => $post) {
        $user = find("user",['id' => $post['user_id']])['acc'];
        ?>
        <tr>
          <th scope="row"><?=( $key + 1 )?></th>
          <td><?=$post['title']?></td>
          <td><?=$user?></td>
          <td><?=$post['date']?></td>
          <td>
              <a href="?do=detail&id=<?=$post['id']?>" class="btn btn-primary">詳細</a>
              <button class="btn btn-primary" onclick="del('post',<?=$post['id']?>)">刪除</button>
          </td>
        </tr>
        <?php
        }
    ?>
  </tbody>
</table>
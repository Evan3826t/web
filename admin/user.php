<?php
$members=all("user");
?>
<?php
if($_SESSION['user'] == "admin"){
  ?>
  <div class="col-12 col-md-12 pb-3"><a href="?do=reg"><button class="btn btn-dark">新增帳號</button></a></div>
  <?php
}
?>
<table class="table table-striped table-dark">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">帳號</th>
      <th scope="col">姓名</th>
      <th scope="col">刪除</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($members as $k => $m) {
        if($m['acc'] == "admin"){
        ?>
        <tr>
            <th scope="row"><?=$k+1?></th>
            <td><?=$m['acc']?></td>
            <td>最高管理員</td>
            <td>不可刪除</td>
        </tr>
        <?php
        }else{
        ?>
        <tr>
            <th scope="row"><?=$k+1?></th>
            <td><?=$m['acc']?></td>
            <td><?=$m['name']?></td>
            <td><button class="btn btn-danger" onclick="del('user',<?=$m['id']?>)">刪除</button></td>
        </tr>
        <?php
        }
    }
    ?>
    
  </tbody>
</table>

</div>
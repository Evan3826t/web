<?php 
include_once ("base.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <!-- 放icon -->
  <link rel="shortcut icon" href="" type="image/x-icon">
  <script src="./js/jquery-3.4.1.min.js"></script>
  <script src="./js/bootstrap.bundle.min.js"></script>
  <script src="./js/all.js"></script>
  <title>首頁</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light text-white" style="background:#7373B9">
      <div class="container">
          <a class="navbar-brand text-white" href="index.php">網站</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              
            </ul>
            <!-- 確認登入使用者 -->
            <?php
            if(empty($_SESSION['user'])){
             ?>
              <button class="btn btn-outline-success bg-dark" onclick="lof('?do=login')">登入</button>
             <?php
            }else{
              ?>
                <button class="btn btn-outline-success bg-dark" onclick="lof('admin.php')">管理</button>
                <button class="btn btn-outline-success bg-dark" onclick="lof('./api/logout.php')">登出</button>
              <?php
            }
            ?>
          </div>
      </div>
    </nav>
    <!-- 導頁 -->
    <?php
    $do = (empty($_GET['do']))?"home":$_GET['do'];
    $path = "./front/" . $do . ".php";
    if(file_exists($path)){
      include ($path);
    }else{
      include ("./front/home.php");
    }
    ?>

</body>
</html>
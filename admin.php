<?php 
include_once ("base.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="./css/fontawesome.all.min.css">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/all.css">
  <link rel="stylesheet" href="./css/animate.css">
  <link rel="shortcut icon" href="./images/icon/favicon-20200328125613967.ico" type="image/x-icon">
  <script src="./js/jquery-3.4.1.min.js"></script>
  <script src="./js/bootstrap.bundle.min.js"></script>
  <script src="./js/all.js"></script>
  <script src="./ckeditor/ckeditor.js"></script>
  <title>後台</title>
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
              <li class="nav-item">
                <a class="nav-link text-white" href="?do=post">文章管理</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="?do=image">圖片管理</a>
              </li>
              <?php
              if($_SESSION['user'] == "admin"){
                ?>
                <li class="nav-item">
                  <a class="nav-link text-white" href="?do=user">會員管理</a>
                </li>
                <?php
              }
              ?>
              
            </ul>
              <button class="btn btn-outline-success bg-dark" onclick="lof('index.php')">首頁</button>
              <button class="btn btn-outline-success bg-dark" onclick="lof('./api/logout.php')">登出</button>
          </div>
      </div>
    </nav>
    <div class="container mb-5 rounded" id="content" style="background:#7373B9">
      <div class="row mt-5" >
          <div class="col-12 my-4 text-white">
              <?php
              $do = (empty($_GET['do']))?"post":$_GET['do'];
              $path = "./admin/" . $do . ".php";
              if(file_exists($path)){
                include ($path);
              }else{
                include ("./admin/post.php");
              }
              ?>
          </div>
      </div>
    </div>

</body>
</html>
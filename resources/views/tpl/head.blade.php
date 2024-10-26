
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/css/bootstrap.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
<title></title>
</head>
<body>
<div id="wrap1">
<div class="head">
<style type="text/css">
.head{background-color:#FFF}
body{background-color:#EEE}
</style>

<?php

if(isUserAuth()) {
  ?>

<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
<a href="/products" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
  <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
  <span class="fs-4">Онлайн магазин </span>
</a>
<ul class="nav nav-pills">
  <li class="nav-item"><a href="/reg" class="nav-link"><li class="nav-item"><a href="/product/create" class="nav-link active" aria-current="page">Создать товар</a></li></a></li>    
  <li class="nav-item"><a href="/reg" class="nav-link"><?php echo session('user_first_name');?></a></li>    
      <li class="nav-item"><a href="/reg" class="nav-link">Выход</a></li>    
</ul>
</header>
  <?php
} else {
  ?>

<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
<a href="/products" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
  <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
  <span class="fs-4">Онлайн магазин </span>
</a>
<ul class="nav nav-pills">
  <li class="nav-item"><a href="/login" class="nav-link active" aria-current="page">Вход</a></li>
  <li class="nav-item"><a href="/reg" class="nav-link">Регистрация</a></li>    
</ul>
</header>
  <?php
}
?>




</div>
<div>
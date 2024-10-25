<?php
include SITE_ROOT.'/resources/views/tpl/head.blade.php';
include SITE_ROOT.'/resources/views/tpl/right_bar.blade.php';
 include SITE_ROOT.'/resources/views/tpl/sidebar.blade.php';

?>


<style type="text/css">
.form-control{border: 1px solid #D1D1D1}
</style>


<form style="width:31%;margin:77px	 auto;border: 1px solid #CCC;padding: 17px 37px;border-radius: 9px;background-color: #FFF;">

<p class="fs-2">Регистрация</p>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Имя</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Фамилия</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Пароль</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

  </div>


  <button type="submit" class="btn btn-primary" style="width:100%">Зарегестрироваться</button>
  <div style="margin-top: 14px;">
  	<a href="" style="text-decoration: none;">Войти</a>
  </div></form>

<?php
include SITE_ROOT.'/resources/views/tpl/other.blade.php';
include SITE_ROOT.'/resources/views/tpl/footer.blade.php';
?>
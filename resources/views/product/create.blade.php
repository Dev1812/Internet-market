<?php
include SITE_ROOT.'/resources/views/tpl/head.blade.php';
include SITE_ROOT.'/resources/views/tpl/right_bar.blade.php';
include SITE_ROOT.'/resources/views/tpl/sidebar.blade.php';
?>


<style type="text/css">
.form-control{border: 1px solid #D1D1D1}
</style>


<form action="" method="POST" style="width:31%;margin:77px	 auto;border: 1px solid #CCC;padding: 17px 37px;border-radius: 9px;background-color: #FFF;">
{{ csrf_field() }}
<p class="fs-2">Создание товара</p>
  <?php

if(!empty($result)) {
  var_dump($result);
}
  ?>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Название</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="product_title" placeholder="Название товара">

  </div>












  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Стоимость</label>
    <input type="text" class="form-control" name="product_cost" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Стоимость тоавра">
<span style="float: right;margin-top: -31px;margin-right: 7px;">руб.</span>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="product_cost">Фирма</label>
    <input type="text" class="form-control" name="product_company" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Фирма тоавра">

  </div>












  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Описание</label>















<!-- Place the first <script> tag in your HTML's <head> -->
<script src="https://cdn.tiny.cloud/1/9urzehoowv03rdhn0hd1jm3v6wntvgmcmz5lk43qc4mu9dtu/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>

<!-- Place the following <script> and <textarea> tags your HTML's <body> -->
<script>
  tinymce.init({
    selector: 'textarea',
    plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
  });
</script>











    <TEXTAREA type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="product_description" style="height: 127px;" placeholder="Описание тоавра"></TEXTAREA>

  </div>
  <input type="submit" class="btn btn-primary" name="product_submit" style="width:100%" value="Зарегестрироваться">
</FORM>
  
  <div style="margin-top: 14px;">
  	<a href="" style="text-decoration: none;">Войти</a>
  </div></form>

<?php
include SITE_ROOT.'/resources/views/tpl/other.blade.php';
include SITE_ROOT.'/resources/views/tpl/footer.blade.php';
?>
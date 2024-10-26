<?php
include SITE_ROOT.'/resources/views/tpl/head.blade.php';
include SITE_ROOT.'/resources/views/tpl/right_bar.blade.php';
include SITE_ROOT.'/resources/views/tpl/sidebar.blade.php';
?>
<style type="text/css">
.form-control{border: 1px solid #D1D1D1}
.card{display: inline-block;vertical-align: top;margin:9px 7px;width: 17%}
.card-img-top{height: 210px;background-size: cover;background-position: center;}
#container {  display: flex;  flex-direction: row;  justify-content: flex-start;}
.main-position{text-align:center;}
.product-photo{background-color: #F1F1F1   ;}
.product-cost{margin:9px 0 14px}
.product-buy-action{margin-top: 9px;}
.product-title{height:53px;overflow: hidden;}
</style>


<div class="main-position">

<?php

foreach($products as $v) {
?>

<div class="card">
<div style="background-image: url('<?php echo $v['photo_cover'];?>'); " class="card-img-top product-photo">
</div>
<div class="card-body">
  <div class="fs-5 product-title"><?php echo $v['title'];?></div>
  <div class="fs-7 text-danger product-cost"><b><?php echo $v['cost'];?></b> руб.
  </div>
  <div class="fs-7 product-buy-action">
    <button class="btn btn-primary" onClick="showBuyModal();  ">Купить</button>
  </div>
</div>
</div>
<?php
}
?>
<script type="text/javascript">
function hideBuyModal() {
  $('#hide-buy-modal').hide();
}
function showBuyModal() {
  //$('#hide-buy-modal').show();
  $('#buy-modal').modal('show');
  //$('#modal-buy').modal('show');



}
</script>
<div class="modal fade show" id="hide-buy-modal" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-modal="true" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Покупка</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         Покупка завершена успешно... 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" onclick="hideBuyModal();" data-bs-dismiss="modal">Закрыть</button>
      </div>
    </div>
  </div>
</div>  










































<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" id="modal-buy">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade modal-lg" id="buy-modal" tabindex="-1" aria-labelledby="exampleModalLabel" style="opacity: 1;padding-top: 37px;" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">покупка товара (apple)</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       






<style type="text/css">
.my-col{width: 30%;f}
</style>
 <div class="container" style="text-align: left;">










 
  
  <div class="row" style="vertical-align: top;">
    <div class=" my-col  fs-5 " style="float:left;width: 39%;">
      <div style="background-image: url('/image/grunge-2710970_960_720.jpg'); 
    height: 197   px;float: left;width: 100%;" class="card-img-top product-photo">
</div>

<div style="position: relative;top: 14px;">





<button type="button" class="btn btn-outline-success" onClick="showBuyModal()" style="width:100%;">Купить</button>

</div>


<div style="position: relative;top: 29px;">


<button type="button" class="btn btn-outline-primary" style="width:100%">Отмена</button>









</div>
    </div>
    <div class="my-col fs-7" style="margin-top: 4px;width: 61%;">


      

 
  

  

  

  
  <div class="row">
    <div class="  fs-3 my-cosl" style="display:inline-block;float:left;width: 49%;"> iPhone 15  
    </div>
    <div class="" style="display:inline-block;float:left;width: 50%;"> </div>
</div>
  



  
  <div class="row" style="margin-top: 9px;">
    <div class="  fs-7   my-cosl" style="display:inline-block;float:left;width: 49 %;width: 50%;">Стоимость
    </div>
    <div class="" style="display:inline-block;float:left;width: 50%;"> 24 руб.   </div>
</div>
  
  <div class="row" style="margin-top: 9px;">
    <div class="  fs-7   my-cosl" style="display:inline-block;float:left;width: 49 %;width: 50%;">Производитель
    </div>
    <div class="" style="display:inline-block;float:left;width: 50%;"> Russia   </div>
</div>
  
  <div class="row" style="margin-top: 9px;line-height:27px ;">

    <div class="">
      Встречайте iPhone 15 - ваш идеальный спутник в мире безграничных возможностей!
Новый iPhone 15 открывает двери в мир передовых технологий и непревзойденного дизайна.
iPhone 15 является воплощением инноваций, стиля и функциональности. С его появлением вы сможете наслаждаться яркими и насыщенными цветами на 6,1-дюймовом OLED-дисплее Super Retina XDR, который обеспечивает невероятное качество изображения даже при ярком солнечном свете.
Новейший процессор A16 Bionic с усовершенствованным Neural Engine обеспечивает молниеносную скорость работы и плавность анимации, позволяя вам работать, играть и открывать новые горизонты без задержек и тормозов.
Камера iPhone 15 с разрешением 48 МП и оптической стабилизацией изображения позволяет создавать профессиональные снимки даже при слабом освещении, а режим “Киноэффект” превращает ваши видео в настоящие произведения искусства. Фронтальная камера TrueDepth с функцией Face ID гарантирует безопасность и удобство разблокировки устройства.
Улучшенная батарея обеспечивает долгую автономную работу устройства, позволяя использовать его на протяжении всего дня без подзарядки. Быстрая зарядка MagSafe позволит быстро зарядить ваш iPhone, а поддержка беспроводной зарядки Qi позволит заряжать iPhone без проводов.
    </div>
</div>


      

 
  

    </div>
</div>





    










  

</div>










      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Заткрыть</button>
        <button type="button" class="btn btn-primary">Купить</button>
      </div>
    </div>
  </div>
</div>











































<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

<!-- Кнопка, открывающая модальное окно -->
















</div>

<?php
include SITE_ROOT.'/resources/views/tpl/other.blade.php';
include SITE_ROOT.'/resources/views/tpl/footer.blade.php';
?>
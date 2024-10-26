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


</style>


<div style="text-align:center;">

<?php

foreach($products as $v) {
?>

<div class="card">
  <div style="background-image: url('<?php echo $v['photo_cover'];?>');background-color: #F1F1F1   ; " class="card-img-top" alt="..."></div>
  <div class="card-body">
<div class="fs-7 text-danger"><b><?php echo $v['cost'];?></b> руб.</div>
<div class="fs-5"><?php echo $v['title'];?></div>
<div class="fs-7" style="margin-top: 9px;"><button type="button" class="btn btn-primary">Купить</button></div>
  </div>
</div>
<?php
}
?>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  














































<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

<!-- Кнопка, открывающая модальное окно -->
























<!-- Modal -->
<div class="modal fade" id="d" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
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
        <button type="button" class="btn btn-secondary" onClick="
        $('.modal-backdrop').hide();" data-bs-dismiss="modal">Закрыть</button>
      </div>
    </div>
  </div>
</div>



















<script type="text/javascript">
  
$(document).ready(function() {
    // при нажатии на кнопку #show-modal
    $('#show-modal-success').click(function() {
        // открыть модальное окно #modal-example
        $('#d').modal('show');
        $("#exampleModal").hide();
    });
});
</script>


































<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Покупк</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body"> 
         Покупка завершена успешно...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>





























<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" id="modal-buy">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <!--  ...-->



<div class="card" style="width:100%;padding:0;border: 0;"  class="btn btn-primary">
  <div style="background-image: url('<?php echo $v['photo_cover'];?>');background-color: #F1F1F1   ; " class="card-img-top" alt="..."></div>
  <div class="card-body">
<div class="fs-7 text-danger"><b><?php echo $v['cost'];?></b> руб.</div>
<div class="fs-5" style="margin-bottom: 9px"><?php echo $v['title'];?></div>


r
<img src="/image/pl.png" style="width: 100%;" onclick="" data-bs-toggle="modal2" data-bs-target="#exampleModal2" id="show-modal-success">





  </div>


</div>







      </div>
    </div>
  </div>
</div>


</div>

<?php
include SITE_ROOT.'/resources/views/tpl/other.blade.php';
include SITE_ROOT.'/resources/views/tpl/footer.blade.php';
?>
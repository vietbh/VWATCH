<?php 

    if(is_array($dm)){
        extract($dm);
    }

?>


<div class="pg" style="margin: 1em 1em;">
    <h6>
        <a href="index.php" style="text-decoration: none; color: chocolate;">Trang chủ</a> /
        <a href="index.php?act=ds-dm" style="text-decoration: none; color:chocolate;">Danh mục</a> /
        <a href="index.php" style="text-decoration: none; color: brown;">Thêm danh mục</a> /
    </h6>

    <br>
    <h2>Sửa danh mục</h2>
    <!-- show danh mục -->
  <div class="mb-4">
  <table class="table caption-top">
  <caption>Danh sách</caption>
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">Mã loại</th>
      <th scope="col">Tên danh mục</th>
      <th scope="col">Sửa</th>
    </tr >
  </thead>
  <tbody>
  </tbody>
</table>
</div>
<?php ?>
<form class="was-validated" action="index.php?act=update-dm" style="width: 55em; margin: 3em 3em;;" method="POST">
  <div class="mb-4">
    <label for="validationTextarea" class="form-label">Mã loại</label>
    <input type="text" class="form-control is-valid" id="validationTextarea" value="<?=$dm['ma']?>" name="maloai"></input>
    <div class="invalid-feedback">
      <?php 
        if(isset($note)&&($note!="")) echo $note;
      ?>
    </div>
  </div>
  <div class="mb-4">
    <label for="validationTextarea" class="form-label">Nhập tên danh mục</label>
    <input type="text" class="form-control is-valid" id="validationTextarea" value="<?=$dm['name']?>"  name="tenloai"></input>
    <div class="invalid-feedback">
      <!--<?php if(isset($id)&&($id!="")) echo $id ?>  -->
      <?php 
        if(isset($note)&&($note!="")) echo $note;
      ?>
    </div>
  </div>
 
<!-- show danh mục -->
  <!-- <div class="mb-4">
    <select class="form-select"  aria-label="select example">
      <option value="0" >Danh sách danh mục</option>
      <option value="1">One</option>
      <option value="2">Two</option>
      <option value="3">Three</option>
    </select> -->
    <!-- <div class="invalid-feedback">Example invalid select feedback</div> -->
  <!-- </div> -->


  <div class="mb-3">
    <input type="hidden" name="id" value="<?php if(isset($id)&&($id >0)) echo $id ?>">
    <input class="btn btn-primary" type="submit" id="" value="Cập nhật" name="capnhat"></input>
    <input class="btn btn-primary" type="reset" id="" value="Nhập lại"></input>
    <a href="index.php?act=ds-dm" class="btn btn-primary">Danh sách</a>
  </div>
</form>
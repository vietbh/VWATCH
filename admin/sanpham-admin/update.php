<?php 

  if(is_array($sp)){
    extract($sp);
  }

?>
<div class="pg" style="margin: 1em 1em;">
    <h6>
        <a href="index.php" style="text-decoration: none; color: chocolate;">Trang chủ</a> /
        <a href="index.php?act=ds-sp" style="text-decoration: none; color: chocolate;">Sản phẩm</a> /
        <a href="index.php?act=update-sp" style="text-decoration  : none; color: brown;">Cập nhật sản phẩm</a> /
    </h6>

    <br>
    <h2>Cập nhật sản phẩm</h2>
    
</div>

<form action="index.php?act=update-sp" class="was-validated" style="width: 55em; margin: 3em 3em;border: 2px solid white;" method="POST" enctype="multipart/form-data">
  <!-- Tên -->
<div class="mb-4">
    <label for="validationTextarea" class="form-label">Nhập tên sản phẩm</label>
    <input type="text" class="form-control is-valid" id="validationTextarea" value="<?=$sp['name']?>" name="tensp"></input>
   
    <!-- <div class="invalid-feedback">
      Please enter a message in the textarea.
    </div> -->
  </div>

 <!-- Danh mục -->
 
 <input type="text" disabled class="form-control is-valid" id="validationTextarea" value="<?=$sp['iddm']?>" disibled></input>
 <div class="mb-4">
   <select class="form-select" name="iddm">
   
     <?php 
         
          foreach($lists as $dm){
            extract($dm);
            echo '
            <option value="'.$id.'" >'.$id.'-'.$name.'</option>
            ';
          }
          ?>
    </select>
    <!-- <div class="invalid-feedback">Example invalid select feedback</div> -->
  </div>
  
  <!-- Đăng hình sp -->
  <div class="mb-4">
    <input type="text" class="form-control" aria-label="number example" value="<?=$sp['price']?>" name="gia">
    <!-- <div class="invalid-feedback">Chọn file hình sản phẩm</div> -->
  </div>
  <img src="../uploads/<?=$sp['img']?>" alt="" srcset="" width=550px height=500px>
  <input type="text" disabled class="form-control is-valid" id="validationTextarea" value="<?=$sp['img']?>" disibled></input>
  <div class="mb-4">
    <input type="file" class="form-control" aria-label="file example" name="hinh">
    <div class="invalid-feedback">Chọn file hình sản phẩm</div>
  </div>

  <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Mô tả sản phẩm</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="mota" placeholder="<?=$sp['mota']?>"></textarea>
  </div>

  <div class="mb-3">
  <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id ?>">
    <input class="btn btn-primary" type="submit" id="" name ="capnhat" value="Cập nhật sản phẩm">
    <input class="btn btn-primary" type="reset" id="" value="Nhập lại">
    <a href="index.php?act=ds-sp" class="btn btn-primary">Danh sách</a>
  </div>
</form>
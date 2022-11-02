
<div class="pg" style="margin: 1em 1em;">
    <h6>
        <a href="index.php" style="text-decoration: none; color: chocolate;">Trang chủ</a> /
        <a href="index.php?act=ds-sp" style="text-decoration: none; color: chocolate;">Danh sách sản phẩm</a> /
        <a href="index.php?act=add-sp" style="text-decoration: none; color: brown;">Thêm sản phẩm</a> /
    </h6>

    <br>
    <h2>Thêm sản phẩm</h2>
    
</div>

<form action="index.php?act=add-sp" class="was-validated" style="width: 55em; margin: 3em 3em;border: 2px solid white;" method="POST" enctype="multipart/form-data">
  <!-- Tên -->
<div class="mb-4">
    <label for="validationTextarea" class="form-label">Nhập tên sản phẩm</label>
    <input type="text" class="form-control is-valid" id="validationTextarea" placeholder="Mời nhập tên sản phẩm" name="tensp"></input>
    <!-- <div class="invalid-feedback">
      Please enter a message in the textarea.
    </div> -->
  </div>

 <!-- Danh mục -->
  <div class="mb-4">
    <select class="form-select" name="iddm">
      <?php 
          foreach($lists as $dm){
            extract($dm);
            echo '
            <option value="'.$id.'">'.$name.'</option>
            ';
          }
      ?>
    </select>
    <!-- <div class="invalid-feedback">Example invalid select feedback</div> -->
  </div>

  <!-- Đăng hình sp -->
  <div class="mb-4">
    <input type="text" class="form-control" aria-label="number example" placeholder="Nhập giá sản phẩm" name="gia">
    <!-- <div class="invalid-feedback">Chọn file hình sản phẩm</div> -->
  </div>
  <div class="mb-4">
    <input type="file" class="form-control" aria-label="file example" name="hinh">
    <div class="invalid-feedback">Chọn file hình sản phẩm</div>
  </div>

  <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Mô tả sản phẩmphẩm</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="mota"></textarea>
  </div>

  <div class="mb-3">
    <input class="btn btn-primary" type="submit" id="" name="themmoi" value="Thêm sản phẩm">
    <button class="btn btn-primary" type="reset" id="">Nhập lại</button>
    <a href="index.php?act=ds-sp" class="btn btn-primary">Danh sách</a>
  </div>
</form>
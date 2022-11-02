<div class="pg" style="margin: 1em 1em;">
    <h6>
        <a href="index.php" style="text-decoration: none; color: aliceblue;">Trang chủ</a> /
        <a href="index.php?act=ds-dm" style="text-decoration: none; color: aliceblue;">Danh mục</a> /
        <a href="index.php" style="text-decoration: none; color: brown;">Thêm danh mục</a> /
    </h6>

    <br>
    <h2>Thêm danh mục</h2>
    
</div>

<form class="was-validated" action="index.php?act=add-dm" style="width: 55em; margin: 3em 3em;;" method="POST">
  <div class="mb-4">
    <label for="validationTextarea" class="form-label">Mã loại</label>
    <textarea class="form-control is-valid" id="validationTextarea" placeholder="Mời nhập mã loại" name="maloai"></textarea>

  </div>
  <div class="mb-4">
    <label for="validationTextarea" class="form-label">Nhập tên danh mục</label>
    <textarea class="form-control is-valid" id="validationTextarea" placeholder="Mời nhập tên danh mục" name="tenloai"></textarea>
   
  </div>
 


  <div class="mb-3">
    <input class="btn btn-primary" type="submit" id="" value="Thêm mới" name="themmoi"></input>
    <input class="btn btn-primary" type="reset" id="" value="Nhập lại"></input>
    <a href="index.php?act=ds-dm" class="btn btn-primary">Danh sách</a>
  </div>
</form>
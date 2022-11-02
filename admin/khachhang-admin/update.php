<?php 

  if(is_array($onetk)){
    extract($onetk);
  }

?>
<div class="pg" style="margin: 1em 1em;">
    <h6>
        <a href="index.php" style="text-decoration: none; color: chocolate;">Trang chủ</a> /
        <a href="index.php?act=ds-kh" style="text-decoration: none; color: chocolate;">Danh sách khách hàng</a> /
        <a href="index.php" style="text-decoration: none; color: brown;">Thêm khách hàng</a> /
    </h6>

    <br>
    <h2>Cập nhật tài khoản</h2>
    
</div>

<form action="index.php?act=update-tk" class="was-validated" style="width: 55em; margin: 3em 3em;border: 2px solid white;" method="POST" enctype="multipart/form-data">
  <!-- Tên -->
<div class="mb-4">
    <label for="validationTextarea" class="form-label">Nhập tên khách hàng</label>
    <input type="text" class="form-control is-valid" id="validationTextarea" value="<?=$onetk['name']?>" name="tenkh" placeholder="Nhập tên khách hànghàng"></input>
   
    <!-- <div class="invalid-feedback">
      Please enter a message in the textarea.
    </div> -->
  </div>

 <!-- Danh mục -->
 <label for="validationTextarea" class="form-label">Chọn chức vụ</label>
 <input type="text" disabled class="form-control is-valid" id="validationTextarea" value="<?=$onetk['role']?>" disibled></input>
 <div class="mb-4">
   <select class="form-select" name="role">
            <option value="0" >0-user</option>
            <option value="1">1-admin</option>
    </select>
    <!-- <div class="invalid-feedback">Example invalid select feedback</div> -->
  </div>
  
  <!-- Đăng hình sp -->
  <div class="mb-4">
    <input type="text" class="form-control" aria-label="number example" value="<?=$onetk['diachi']?>" name="diachi" placeholder="Nhập địa chỉ">
    <!-- <div class="invalid-feedback">Chọn file hình sản phẩm</div> -->
  </div>
  <div class="mb-4">
  <input type="email" class="form-control is-valid" id="validationTextarea" value="<?=$onetk['email']?>" name="email" placeholder="Nhập email">
  </div>
  <div class="mb-4">
  <input type="text" class="form-control is-valid" id="validationTextarea" value="<?=$onetk['user']?>" name="user" >
  </div>
  <div class="mb-4">
  <input type="pass" class="form-control is-valid" id="validationTextarea" value="<?=$onetk['pass']?>" name="pass" >
  </div>

  <div class="mb-3">
  <input type="hidden" name="id" value="<?php if(isset($id)&&($id >0)) echo $id ?>">
    <input class="btn btn-primary" type="submit" id="" name="capnhat" value="Cập nhật">
    <button class="btn btn-primary" type="reset" id="">Nhập lại</button>
    <a href="index.php?act=ds-kh" class="btn btn-primary">Danh sách</a>
  </div>
</form>
<div class="pg" style="margin: 1em 1em;">
    <h6>
        <a href="index.php" style="text-decoration: none; color: aliceblue;">Trang chủ</a> /
        <a href="index.php?act=ds-dm" style="text-decoration: none; color: aliceblue;">Tài khoản</a> /
        <a href="index.php" style="text-decoration: none; color: brown;">Thêm tài khoản</a> /
    </h6>

    <br>
    <h2>Thêm tài khoản</h2>
    
</div>

<form class="was-validated" action="index.php?act=add-tk" style="width: 55em; margin: 3em 3em;;" method="POST">
  <div class="mb-4">
    <label for="validationTextarea" class="form-label">Tên khách hàng</label>
    <textarea class="form-control is-valid" id="validationTextarea" placeholder="Mời nhập tên" name="tenkh"></textarea>

  </div>
  <div class="mb-4">
    <label for="validationTextarea" class="form-label">Địa chỉ</label>
    <textarea class="form-control is-valid" id="validationTextarea" placeholder="Mời nhập địa chỉ" name="diachi"></textarea>
  </div>
  <div class="mb-4">
    <label for="validationTextarea" class="form-label">Email</label>
    <input type="email" class="form-control is-valid" id="validationTextarea" placeholder="Mời nhập email" name="email">
  </div>
  <div class="mb-4">
    <label for="validationTextarea" class="form-label">Tên đăng nhập</label>
    <input type="text" class="form-control is-valid" id="validationTextarea" placeholder="Mời nhập tên đăng nhập" name="user">
  </div>
    <div class="mb-4">
      <label for="validationTextarea" class="form-label">Mật khẩu</label>
      <input type="password" class="form-control is-valid" id="validationTextarea" placeholder="Mời nhập mật khẩu" name="pass">
    </div>
    <div class="mb-4">
        <select name="role" id="" class="form-select">
            <option value="0">Khách hàng</option>
            <option value="1">Admin</option>
        </select>
    </div>

  <div class="mb-3">
    <input class="btn btn-primary" type="submit" id="" value="Thêm mới" name="themmoi">
    <input class="btn btn-primary" type="reset" id="" value="Nhập lại">
    <a href="index.php?act=ds-dm" class="btn btn-primary">Danh sách</a>
  </div>
</form>
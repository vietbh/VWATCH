<div class="pg" style="margin: 1em 1em;">
    <h6>
        <a href="index.php" style="text-decoration: none; color: chocolate;">Trang chủ</a> /
        <a href="index.php?act=ds-sp" style="text-decoration: none; color: brown;">Danh sách khách hàng</a>
    </h6>

    <br>
    <h2>Khách hàng</h2>
    
</div>

<div class="mb-3">
    <a href="index.php?act=add-tk" class="btn btn-primary">Thêm tài khoản</a>
  </div>
<!-- show danh mục -->
  <div class="mb-4">
  <table class="table caption-top">
  <caption>Danh sách khách hànghàng</caption>
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">Tên</th>
      <th scope="col">Địa chỉ</th>
      <th scope="col">Email</th>
      <th scope="col">Tên đăng nhập</th>
      <th scope="col">Mật khẩu</th>
      <th scope="col">Chức vụ(1 là admin/0 là khách hàng)</th>
      <th scope="col">Sửa</th>
      <th scope="col">Xóa</th>
    </tr >
  </thead>
  <tbody>
    <?php 
    $i = 1;
      foreach($dskh as $kh){
        extract($kh);
        $updatetk="index.php?act=capnhat-tk&id=".$id;
        $deletetk="index.php?act=delete-tk&id=".$id;
        echo '
          <tr>
            <th scope="row">'.$i.'</th>
            <td>'.$name.'</td>
            <td>'.$diachi.'</td>
            <td>'.$email.'</td>
            <td>'.$user.'</td>
            <td>'.$pass.'</td>
            <td>'.$role.'</td>
            <td>
                <a href="'.$updatetk.'" class="btn btn-primary">Sửa</a>
            </td>
            <td>
                <a href="'.$deletetk.'" class="btn btn-primary">Xóa</a>
            </td>
          </tr>
        '; $i++;
      }
    ?>
  </tbody>
 
</table>

 

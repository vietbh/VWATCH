<div class="pg" style="margin: 1em 1em;">
    <h6>
        <a href="index.php" style="text-decoration: none; color: chocolate;">Trang chủ</a> /
        <a href="index.php?act=ds-sp" style="text-decoration: none; color: brown;">Danh sách sản phẩm</a>
    </h6>

    <br>
    <h2>Sản phẩm</h2>
    
</div>

<div class="mb-3">
    <a href="index.php?act=add-sp" class="btn btn-primary">Thêm sản phẩm</a>
  </div>
<!-- show danh mục -->
  <div class="mb-4">
  <table class="table caption-top">
  <caption>Danh sách sản phẩm</caption>
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">Tên danh mục</th>
      <th scope="col">Giá</th>
      <th scope="col">Hình ảnh</th>
      <th scope="col">Mô tả</th>
      <th scope="col">Lượt xem</th>
      <th scope="col">Danh mục</th>
      <th scope="col">Sửa</th>
      <th scope="col">Xóa</th>
    </tr >
  </thead>
  <tbody>
    <?php 
    $i = 1;
      foreach($listsp as $dssp){
        extract($dssp);
        $updatesp="index.php?act=capnhat-sp&id=".$id;
        $deletesp="index.php?act=delete-sp&id=".$id;
        echo '
          <tr>
            <th scope="row">'.$i.'</th>
            <td>'.$name.'</td>
            <td>'.$price.'</td>
            <td> <img src="../uploads/'.$img.'" alt="" srcset="" width=100px height=100px></td>
            <td>'.$mota.'</td>
            <td>'.$view.'</td>
            <td>'.$iddm.'</td>

            <td>
            <a href="'.$updatesp.'" class="btn btn-primary">Sửa</a>
            </td>
            <td>
         
                <a href="'.$deletesp.'" class="btn btn-primary">Xóa</a>
              
            </td>
          </tr>
        '; $i++;
      }
    ?>
  </tbody>
 
</table>

 

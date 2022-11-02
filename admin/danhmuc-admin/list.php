<div class="pg" style="margin: 1em 1em;">
    <h6>
        <a href="index.php" style="text-decoration: none; color: chocolate;">Trang chủ</a> /
        <a href="index.php" style="text-decoration: none; color: brown;">Danh sách danh mục</a> /
    </h6>

    <br>
    <h2>Danh sách</h2>
    
</div>

<div class="mb-3">
    <a href="index.php?act=add-dm" class="btn btn-primary">Thêm danh mục</a>
  </div>
<!-- show danh mục -->
  <div class="mb-4">
  <table class="table caption-top">
  <caption>Danh sách</caption>
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">Mã loại</th>
      <th scope="col">Tên danh mục</th>
      <th scope="col">Sửa danh mục</th>
      <th scope="col">Xóa danh mục</th>
    </tr >
  </thead>
  <tbody>
    <?php 
    $i = 1;
      foreach($lists as $danhsach){
        extract($danhsach);
        $updatedm="index.php?act=capnhat-dm&id=".$id;
        $deletedm="index.php?act=delete-dm&id=".$id;
        echo '
          <tr>
            <th scope="row">'.$i.'</th>
            <td>'.$ma.'</td>
            <td>'.$name.'</td>
            <td>
               <a href="'. $updatedm.'" class="btn btn-primary">Sửa</a>
            </td>
            <td>
              <div class="mb-3">
                <a href="'. $deletedm.'" class="btn btn-primary">Xóa</a>
              </div>
            </td>
          </tr>
        '; $i++;
      }
    ?>
  </tbody>
</table>

 

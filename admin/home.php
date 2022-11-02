<div class="container mt-5">
  <div class="row">
    <div class="col-sm-4">
       <h2>Danh mục</h2>
  <div class="mb-4">
  <table class="table caption-top table-success">
  <caption>Danh sách</caption>
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">Mã loại</th>
      <th scope="col">Tên danh mục</th>
    </tr >
  </thead>
  <tbody>
    <?php 
    $i = 1;
      foreach($lists as $danhsach){
        extract($danhsach);
        
        echo '
          <tr>
            <th scope="row">'.$i.'</th>
            <td>'.$ma.'</td>
            <td>'.$name.'</td>
          </tr>
        '; $i++;
      }
    ?>
  </tbody>
</table>

    <div class="col-sm-8">
      <h2>TITLE HEADING</h2>
      <h5>Title description, Dec 7, 2020</h5>
      <div class="fakeimg">Fake Image</div>
      <p>Some text..</p>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>

    </div>
  </div>
</div>
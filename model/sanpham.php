<?php 

function showall_sp(){
    $sql="select * from sanpham order by id desc";
    $listsp=pdo_query($sql);
    return $listsp;
}

function showone_sp($id){
    $sql="select * from sanpham where id=".$id;
    $sp = pdo_query_one($sql);   
    return $sp;
}

function add_sp($tensp,$gia,$img,$mota,$iddm){
    $sql="insert into sanpham(name,price,img,mota,iddm) values('$tensp','$gia','$img','$mota','$iddm')";
    pdo_execute($sql);
}

function del_sp($id){
    $sql="delete from sanpham where id=".$id;
    pdo_execute($sql);

}

// function up_sp($tensp,$gia,$img,$mota,$iddm,$id){
//     $sql="update sanpham set name='$tensp', price='".$gia."' ,img='".$img."' ,mota='".$mota."', iddm='".$iddm."' where id=".$id;
//     pdo_execute($sql);
// }

function update_sp($tensp,$gia,$img,$mota,$iddm,$id){
    $sql ="UPDATE sanpham SET price='".$gia."',name='".$tensp."',img='".$img."',mota='".$mota."',iddm='".$iddm."' WHERE id=".$id;
    pdo_execute($sql);
}


?>
<?php 

function showall_dm(){
    $sql="select * from danhmuc order by id desc";
    $lists=pdo_query($sql);
    return $lists;
}

function showone_dm($id){
    $sql="select * from danhmuc where id=".$id;
    $dm = pdo_query_one($sql);   
    return $dm;
}

function add_dm($maloai,$tenloai){
    $sql="insert into danhmuc(ma,name) values('$maloai','$tenloai')";
    pdo_execute($sql);
}

function del_dm($id){
    $sql="delete from danhmuc where id=".$id;
    pdo_execute($sql);

}

function up_dm($tenloai,$maloai,$id){
    $sql="update danhmuc set name='".$tenloai."', ma='".$maloai."' where id=".$id;
    pdo_execute($sql);
}


?>


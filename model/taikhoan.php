<?php

function checked_user($user,$pass){
    $sql="select * from user where user='".$user."' AND pass='".$pass."'" ;
    $check = pdo_query_one($sql);  
    return $check;
}
function select_by_role($role){
    $sql = "SELECT * FROM user WHERE role='".$role."'";
    return pdo_query($sql);
}


function update_tk($tenkh, $diachi, $email, $user,$pass, $role,$id){
    $sql = "UPDATE user SET pass='".$pass."',name='".$tenkh."',diachi='".$diachi."',email= '".$email."',user='".$user."',role='".$role."' WHERE id=$id";
    pdo_execute($sql);
}


function del_tk($id){
    $sql="delete from user where id=".$id;
    pdo_execute($sql);

}

function checker(){
    $sql = "select user from user order by id ";
    return pdo_query($sql);
}

function add_tk($tenkh, $diachi, $email, $user,$pass, $role){
    $sql="insert into user(name,diachi,email,user,pass,role) values('$tenkh','$diachi','$email', '$user','$pass', '$role')";
    pdo_execute($sql);
}
function add_tk_kh($tenkh, $diachi, $email, $user,$pass,$role=0){
    $sql="insert into user(name,diachi,email,user,pass,role) values('$tenkh','$diachi','$email', '$user','$pass', '$role')";
    pdo_execute($sql);
}

function taikhoan_showall(){
    $sql = "select * from user order by id desc";
    return pdo_query($sql);
}

function taikhoan_showones($user){
    $sql = "select name from user where user='".$user."'";
    return pdo_query_one($sql);
}


?>
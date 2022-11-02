<?php
    session_start();
    ob_start();
       include "../model/pdo.php";
       include "../model/taikhoan.php";
       include "../model/sanpham.php";
    include "view/header.php";
    if(!isset($_SESSION['mycart'])) $_SESSION['mycart'] = [];
    if(isset($_GET['act'])){
        
    switch ($_GET['act']){
        case 'product':
            $listsp = showall_sp(); 
            include "view/product.php";
            break;
        case 'detail':
                $showsp = showone_sp($_GET['id']);
            include "view/detail.php";
            break;
        case 'cart':
            include "view/cart.php";
            break;
        case 'addcart':
            if (isset($_POST['addcart'])&&($_POST['addcart'])) {
                $id = $_POST['id'];
                $name = $_POST['name'];
                $img = $_POST['img'];
                $price = $_POST['price'];
                $soluong = $_POST['soluong'];
          
                if($_SESSION['mycart'][0] == $id){
                    $soluong += $soluong;
                    $ttien = $price * $soluong;
                }else{
                    $soluong = 1;
                    $ttien = $price * $soluong;
                    $cartsp=[$id,$name,$img,$price,$soluong,$ttien];
                    array_push($_SESSION['mycart'],$cartsp);
                }
               
            }
            include "view/cart.php";
            break;
        case 'delcart':
            if (isset($_SESSION['mycart']) && count($_SESSION['mycart'])>0) {
                session_unset();
                include "view/cart.php";
            }else{
                include "view/product.php";
            }
               
            break;
        case 'contact':
            include "view/contact.php";
            break;
        case 'login':
            include "taikhoan/login.php";
            if (isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $checkuser=checked_user($user,$pass);
                if(is_array($checkuser)){
                    $_SESSION['user']=$checkuser;
                    header('location: index.php');
                }
                   $tenonekh=taikhoan_showones($user);
            }
         
      
            break;
            
        case 'thoat':
            if(isset($_SESSION['user'])&&($_SESSION['user'])){
                session_unset();
                header('location: index.php');
                include "taikhoan/login.php";
            }
            break;

        // case 'add-tk':
        //     include "./taikhoan/login.php";
        //     break;
        case 'signin':
            if (isset($_POST['dangki'])&&($_POST['dangki'])){
                $tenkh = $_POST['tenkh'];
                $diachi = $_POST['diachi'];
                $email = $_POST['email'];
                $user = $_POST['user'];
                $pass = $_POST['pass'];
             
                    add_tk_kh($tenkh, $diachi, $email, $user,$pass);
                
            }
            include "taikhoan/signin.php";
            break;
        
        default:
            include "view/home.php";      
            break;
        }  
    }else{
            include "view/home.php";
        }
    include "view/footer.php";
?>
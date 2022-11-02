<?php 
    include "../model/pdo.php";
    include "../model/danhmuc.php";
    include "../model/sanpham.php";
    include "../model/taikhoan.php";
    //controller
  
    include "header.php";
    if(isset($_GET['act']) && ($_GET['act'])){
        $req=($_GET['act']);
        switch ($req){
            // PHẦN DANH MỤC
            case 'ds-dm':
                // show danh mục
                $lists=showall_dm();
                //đường dẫn thêm danh mục
                include "danhmuc-admin/list.php";
                break;
            case 'add-dm':
                //đường dẫn thêm danh mục
                include "danhmuc-admin/add.php";
                // kiểm tra người dùng có bấm nút ko
                 if (isset($_POST['themmoi']) && ($_POST['themmoi'])){
                    $maloai = $_POST['maloai'];
                    $tenloai = $_POST['tenloai'];
                    add_dm($maloai,$tenloai);
                }
                break;

                // XÓA DANH MỤC
            case 'delete-dm':
                if(isset($_GET['id'])&&($_GET['id'])>0){
                   del_dm($_GET['id']);
                }
                $lists=showall_dm();
                include "danhmuc-admin/list.php";
                break;

                // Sửa danh mục
            case 'capnhat-dm':
                    // kiểm tra CÓ DANH MỤC ĐÓ KO
                    if(isset($_GET['id'])&&($_GET['id'])>0){
                        $dm=showone_dm($_GET['id']);
                    }
                    // hiển thị danh mục
                    include "danhmuc-admin/update.php";
                    break;

                // Sửa danh mục

            case 'update-dm':
                    if (isset($_POST['capnhat']) && ($_POST['capnhat'])){
                        $maloai = $_POST['maloai'];
                        $tenloai = $_POST['tenloai'];
                        $id = $_POST['id'];
                        up_dm($tenloai,$maloai,$id);
                    }
            $lists = showall_dm();
            include "danhmuc-admin/list.php";
            break;
                // Phần DANH MỤC


                // PHẦN SẢN PHẨM
                case 'ds-sp':
                    // show danh mục
                    $listsp= showall_sp();
                    //đường dẫn thêm danh mục
                    include "sanpham-admin/list.php";
                break;
                case 'add-sp':
                    // kiểm tra người dùng có bấm nút ko
                    if (isset($_POST['themmoi']) && ($_POST['themmoi'])){
                      $tensp = $_POST['tensp'];
                      $gia = $_POST['gia'];
                      $img = $_FILES['hinh']['name'];
                      $mota = $_POST['mota'];
                      $iddm = $_POST['iddm'];
                      $target_dir = "../uploads/";
                      $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                      if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                        // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                      } else {
                        // echo "Sorry, there was an error uploading your file.";
                      }
                    
                        add_sp($tensp,$gia,$img,$mota,$iddm);
                    }
                    $lists = showall_dm();
                    include "sanpham-admin/add.php";
                    break;
                // Xóa Sản Phẩm
                case 'delete-sp':
                    if(isset($_GET['id'])&&($_GET['id'])>0){
                        $id=$_GET['id'];
                        del_sp($id);
                    }
                    $listsp = showall_sp();
                    include "sanpham-admin/list.php";
                    break;
                // Cập nhật
                case 'capnhat-sp':
                     // kiểm tra CÓ SP ĐÓ KO
                    if(isset($_GET['id'])&&($_GET['id'])>0){
                        $sql="select * from sanpham where id=".$_GET['id'];
                        $sp = pdo_query_one($sql);   
                    
                    }
                    $lists=showall_dm();
                    // hiển thị danh mục
                    include "sanpham-admin/update.php";
                    break;

                case 'update-sp':
                    // kiểm tra người dùng có bấm nút ko
                    if (isset($_POST['capnhat']) && ($_POST['capnhat'])){
                      $tensp = $_POST['tensp'];
                      $gia = $_POST['gia'];
                      $img = $_FILES['hinh']['name'];
                      $mota = $_POST['mota'];
                      $iddm = $_POST['iddm'];
                      $id = $_POST['id'];
                      update_sp($tensp,$gia,$img,$mota,$iddm,$id);
                  
                    }
                    $listsp=showall_sp();
                    //đường dẫn thêm danh mục
                    include "sanpham-admin/list.php";
                    break;
                
                //Phần SẢN PHẨM



                //Phần TÀI KHOẢN
                
                
                case 'ds-kh':
                    // show tài khoản
                    $dskh=taikhoan_showall();
                    include "khachhang-admin/list.php";
                    break;

            case 'add-tk':
                if (isset($_POST['themmoi']) && ($_POST['themmoi'])){
                    $tenkh = $_POST['tenkh'];
                    $diachi = $_POST['diachi'];
                    $email = $_POST['email'];
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $role = $_POST['role'];
                    add_tk($tenkh, $diachi, $email, $user,$pass, $role);
                }
                include "khachhang-admin/add.php";
                break;  
            case 'capnhat-tk':
                if(isset($_GET['id'])&&($_GET['id'])>0){
                    $sql="select * from user where id=".$_GET['id'];
                    $onetk = pdo_query_one($sql);   
                }
                $dskh=taikhoan_showall();
                // hiển thị danh mục
                include "khachhang-admin/update.php";
                break;

            case 'update-tk':
                // kiểm tra người dùng có bấm nút ko
                if (isset($_POST['capnhat']) && ($_POST['capnhat'])){
                    $tenkh = $_POST['tenkh'];
                    $diachi = $_POST['diachi'];
                    $email = $_POST['email'];
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $id = $_POST['id'];
                    $role = $_POST['role'];
                    update_tk($tenkh, $diachi, $email, $user,$pass, $role,$id);
                }
                $dskh=taikhoan_showall();
                include "khachhang-admin/list.php";
                break;
                
            case 'delete-tk':
                if(isset($_GET['id'])&&($_GET['id'])>0){
                   del_tk($_GET['id']);
                }
                $dskh=taikhoan_showall();
                include "khachhang-admin/list.php";
                break;


                
                //Phần TÀI KHOẢN

            case 'ds-bl':
                //code
                break;
            case 'thongke':
                //code
                break;
            case 'thoat':
                // if(isset($_SESSION['role'])) unset($_SESSION['role']);
                //     header('location: index.php');
                header("Location:../Donghocaocap-Vwatch/index.php");
                break;
            default :
                 // show danh mục
                 $lists = showall_dm();
                include "home.php";
                break;
            }
        } else {
            // show danh mục
            $lists = showall_dm();
            include "home.php";
        }
    

   
?>
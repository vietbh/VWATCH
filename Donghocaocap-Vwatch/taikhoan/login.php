<style>
    .gradient-custom {
/* fallback for old browsers */
background: #6a11cb;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))
}
</style>
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
            
            <div class="mb-md-5 mt-md-4 pb-5">
              <?php
                if(isset($_SESSION['user'])){
                  extract($_SESSION['user']);
                  
                  
                  ?> 
                
                <div>
                  <h1  class="fw-bold mb-2 text-uppercase text-white-50" class="mb-0">Chào mừng <h2 class="fw-bold mb-2 text-uppercase text-white-50"><?php echo ' <p>'.$name.'</p> ';?></h2> </h1>
                  <?php
                    if($role==1){?>
                    <p class="mb-0">Vào trang<a href="../admin/index.php" class="text-white-50 fw-bold"> <br>ADMIN QUẢN LÝ</a>
                    <?php } ?>
                  </p>
                  
                  <p class="mb-0">Về trang chủ <a href="index.php?act=home" class="text-white-50 fw-bold"> <br>Home</a>
                </p>
                  <p class="mb-0"> <a href="index.php?act=thoat" class="text-white-50 fw-bold">Thoát</a>
                  <!-- <p class="mb-0">Đăng nhậ <a href="index.php?act=signin" class="text-white-50 fw-bold">Sign In</a> -->
                </p>
              </div>
              
              <?php
                }else{
                  ?>

<form action="index.php?act=login" method="post">
<h2 class="fw-bold mb-2 text-uppercase">Login</h2>
<p class="text-white-50 mb-5">Please enter your login and password!</p>

<div class="form-outline form-white mb-4">
                <input type="text" id="typeEmailX" class="form-control form-control-lg" name="user" />
                <label class="form-label" for="typeEmailX">Name</label>
              </div>

              <div class="form-outline form-white mb-4">
                <input type="password" id="typePasswordX" class="form-control form-control-lg" name="pass" />
                <label class="form-label" for="typePasswordX">Password</label>
              </div>

              <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>

              <input class="btn btn-outline-light btn-lg px-5" type="submit" value="Đăng nhập" name="dangnhap">

              <div class="d-flex justify-content-center text-center mt-4 pt-1">
                <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
              </div>

            </div>
            <div>
              <p class="mb-0">Don't have an account? <a href="index.php?act=signin" class="text-white-50 fw-bold">Sign In</a>
              </p>
            </div>

              


          </div>
        </div>
      </div>
    </div>
  </div><?php   
                
                }
              ?>    
</section>
</form>
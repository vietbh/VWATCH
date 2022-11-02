<!-- Section: Design Block -->
<section class="text-center">
  <!-- Background image -->
  <div class="p-5 bg-image" style="
        background-image: url('https://mdbootstrap.com/img/new/textures/full/171.jpg');
        height: 300px;
        "></div>
  <!-- Background image -->

  <div class="card mx-4 mx-md-5 shadow-5-strong" style="
        margin-top: -100px;
        background: hsla(0, 0%, 100%, 0.8);
        backdrop-filter: blur(30px);
        ">
    <div class="card-body py-5 px-md-5">

      <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
          <h2 class="fw-bold mb-5">Đăng kí tài khoản</h2>
          <form action="index.php?act=signin" method="post">
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="row">
              
              <div class="col-md-12 mb-4">             
                  <div class="form-outline mb-4">
                    <input type="text" id="form3Example3" class="form-control" name="tenkh">
                    <label class="form-label" for="form3Example3">Họ và Tên</label>
                </div>
              </div>
            </div>

            <!-- Name input -->
            <div class="form-outline mb-4">
              <input type="text" id="form3Example3" class="form-control" name="user"/>
              <label class="form-label" for="form3Example3">Tên đăng nhập</label>
            </div>

            <!-- diachi input -->
            <div class="form-outline mb-4">
              <input type="text" id="form3Example3" class="form-control" name="diachi"/>
              <label class="form-label" for="form3Example3">Address-Địa chỉ</label>
            </div>
            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="email" id="form3Example3" class="form-control" name="email"/>
              <label class="form-label" for="form3Example3">Email address</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
              <input type="password" id="form3Example4" class="form-control" name="pass"/>
              <label class="form-label" for="form3Example4">Password</label>
            </div>

       

            <!-- Submit button -->
            <input type="submit" class="btn btn-primary btn-block mb-4" value="Đăng kí" name="dangki">
            <a class="btn btn-primary btn-block mb-4" href="index.php?act=login">Đã có tài khoản</a>
              

            <!-- Register buttons -->
            <div class="text-center">
              <p>or log in with:</p>
              <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-facebook-f"></i>
              </button>

              <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-google"></i>
              </button>

              <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-twitter"></i>
              </button>

              <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-github"></i>
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->
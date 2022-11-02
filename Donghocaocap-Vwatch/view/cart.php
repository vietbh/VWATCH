 <!-- Breadcrumb Start -->
 <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="index.php?">Home</a>
                    <a class="breadcrumb-item text-dark" href="index.php?act=product">San pham</a>
                    <span class="breadcrumb-item active">Shopping Cart</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Cart Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-lg-8 table-responsive mb-5">
                <table class="table table-light table-borderless table-hover text-center mb-0">
                    <thead class="thead-dark">
                        <tr>
                            <th>Products</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Remove</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle">
                    <?php 
                  
                    var_dump($_SESSION['mycart']);
                    $tong=0;
                    foreach($_SESSION['mycart']as $cart){
                        extract($cart);
                        $ttien = $cart[4] * $cart[3];
                        $tong += $ttien ;
                        $del="index.php?act=delcart&id=".$cart[0];
                        echo '
                        <tr>
                            <td class="align-middle"><img src="../uploads/'.$cart[2].'" alt="" style="width: 50px;"> '.$cart[1].'</td>
                            <td class="align-middle">'.number_format($cart[3],2).'</td>
                            <td class="align-middle">
                                <div class="input-group quantity mx-auto" style="width: 100px;">
                                
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-minus" >
                                        <i class="fa fa-minus"></i> 
                                        </button>
                                    </div>
                                    <input type="text" class="form-control form-control-sm bg-secondary border-0 text-center" value="'.$cart[4].'">
                                    <div class="input-group-btn" name="soluong">
                                        <button class="btn btn-sm btn-primary btn-plus">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle">'.number_format($ttien,2).'</td>
                            <td class="align-middle"><a class="btn btn-sm btn-danger" href ="'. $del.'"><i class="fa fa-times"></i></a></td>
                        </tr>
                        ';
                        } 
                        ?>
                        
                        </tbody>
                    </table>
                </div>
            <div class="col-lg-4">
                <!-- <form class="mb-30" action="">
                    <div class="input-group">
                        <input type="text" class="form-control border-0 p-4" placeholder="Coupon Code">
                        <div class="input-group-append">
                            <button class="btn btn-primary">Apply Coupon</button>
                        </div>
                    </div>
                </form> -->
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Cart Summary</span></h5>
                <div class="bg-light p-30 mb-5">
                    <!-- <div class="border-bottom pb-2">
                    <div class="d-flex justify-content-between mb-3">
                        <h6>Subtotal</h6>
                        <h6>$150</h6>
                    </div>
                </div> -->
                    <?php
                        echo '
                    <div class="pt-2">
                        <div class="d-flex justify-content-between mt-2">
                    <h5>Total</h5>
                    <h5>$'.number_format($tong,2).'</h5>
                </div>  
                        
                        ';
                        ?>
                        <button class="btn btn-block btn-primary font-weight-bold my-3 py-3">Proceed To Checkout</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart End -->

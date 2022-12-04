<div class="container-xxl bg-light my-6 py-6 pt-0">
        <div class="container">
            <div class="bg-primary text-light rounded-bottom p-5 my-6 mt-0 wow fadeInUp" data-wow-delay="0.1s">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6">
                        <h1 class="display-4 text-light mb-0">The Best Bakery In Your City</h1>
                    </div>
                    <div class="col-lg-6 text-lg-end">
                        <div class="d-inline-flex align-items-center text-start">
                            <i class="fa fa-phone-alt fa-4x flex-shrink-0"></i>
                            <div class="ms-4">
                                <p class="fs-5 fw-bold mb-0">Call Us</p>
                                <p class="fs-1 fw-bold mb-0">+012 345 6789</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="text-primary text-uppercase mb-2">// Bakery Products</p>
                <h1 class="display-6 mb-4">Explore The Categories Of Our Bakery Products</h1>
            </div>
            <div class="row g-4">
                
            <?php
                include_once 'utils/LDTUtils.php'; 
                $arrTen[]=
                $arrTen=array("Cake","Bread","Cookies");
                $arrGia=array(2,3,4);
                $arrMoTa=array("Socola nguyên chất thơm lừng tạo cảm giác ngon không ngán","Giòn, ruột mềm","Ngọt, mỏng ,nhỏ, ngon");
                $arrHinhAnh=array("product-1.jpg","product-2.jpg","product-3.jpg");
                for($i=0;$i<count($arrTen);$i++){           
                    $index= rand_index($arrTen);
                    echo'    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">';
                    echo'   <div class="product-item d-flex flex-column bg-white rounded overflow-hidden h-100">';
                    echo'             <div class="text-center p-4">';
                    echo'            <div class="d-inline-block border border-primary rounded-pill px-3 mb-3" style="color:'. get_color($arrGia[$index]).'">'.chuyenUSD2VND($arrGia[$index]).'</div>';
                    echo'            <h3 class="mb-3">'.$arrTen[$index].'</h3>';
                    echo'            <span>'.$arrMoTa[$index].'</span>';
                    echo'        </div>';
                    echo'        <div class="position-relative mt-auto">';
                    echo'            <img class="img-fluid" src="img/'.$arrHinhAnh[$index].'" alt="">';
                    echo'            <div class="product-overlay">';
                    echo'                <a class="btn btn-lg-square btn-outline-light rounded-circle" href=""><i class="fa fa-eye text-primary"></i></a>';
                    echo'           </div>';
                    echo'   </div>';
                    
                    echo'    <a href="#"><center><i class="fa fa-cart-plus"> Add to cart</i></center></a>';
                    
                    echo' </div>';
                    echo'</div>';
             }
              ?>
            </div>
        </div>
    </div>
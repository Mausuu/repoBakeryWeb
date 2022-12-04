<nav class="navbar navbar-expand-lg navbar-dark fixed-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        <a href="index.php" class="navbar-brand ms-4 ms-lg-0">
            <h1 class="text-primary m-0">Baker</h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto p-4 p-lg-0">
                <?php
                function active_page($active){
                    if(strcmp($_SERVER['REQUEST_URI'],'/bakerywebsite/bakery/'.$active.'.php')==0){
                        return "active";
                    }
                }
                echo '<a href="index.php" class="nav-item nav-link '.active_page('index').' ">Home</a>';
                echo '<a href="about.php" class="nav-item nav-link  '.active_page('about').'">About</a>';
                echo '<a href="service.php" class="nav-item nav-link '.active_page('service').'">Services</a>';
                echo '<a href="product.php" class="nav-item nav-link '.active_page('product').'">Products</a>';
                echo '<div class="nav-item dropdown">';
                echo '    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>';
                echo '    <div class="dropdown-menu m-0">';
                echo '        <a href="team.php" class="dropdown-item">Our Team</a>';
                echo '        <a href="testimonial.php" class="dropdown-item">Testimonial</a>';
                echo '        <a href="404.php" class="dropdown-item">404 Page</a>';
                echo '    </div>';
                echo '</div>';
                echo '<a href="contact.php" class="nav-item nav-link '.active_page('contact').'">Contact</a>';
                ?>
            </div>
            <div class=" d-none d-lg-flex">
                <div class="flex-shrink-0 btn-lg-square border border-light rounded-circle">
                    <i class="fa fa-phone text-primary"></i>
                </div>
                <div class="ps-3">
                    <small class="text-primary mb-0">Call Us</small>
                    <p class="text-light fs-5 mb-0">+012 345 6789</p>
                
                </div>
            </div>
        </div>
    </nav>
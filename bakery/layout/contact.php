<div class="container-xxl py-6">
        <div class="container">
            
            <div class="row g-0 justify-content-center">
                <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
                    <form action="./controller/user_controller.php" method="post">
                        <div class="row g-3">
                            <h2>Login</h2>
                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="user_name" placeholder="Your Name">
                                    <label for="user_name">Your Name</label>
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="password" class="form-control" name="password" placeholder="Password">
                                    <label for="password">Password</label>
                                </div>
                            </div>
                            
                            <div class="col-12 text-center">
                                <input type="submit" class="btn btn-primary rounded-pill py-3 px-5" name="btn_action" value="Login">
                                <input type="submit" class="btn btn-primary rounded-pill py-3 px-5" name="btn_action" value="Register">

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
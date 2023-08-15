<?php include 'header.php' ?>

<div class="row d-flex justify-content-center" style="overflow: hidden; height:95vh">
    <div class="col-8 mt-5 login-container ">
        <div class="row">
            <div class="col-6 row " style="overflow: hidden;">
                <div class="container-login  col-12">
                    <div class="row " style="height: 85vh;">
                        <div class="d-flex align-items-center justify-content-center login-front ">
                            <div class="row col-12 ">
                                <h1 class="col-12 login-head ">Log in</h1>
                                <div class="wrap-input100 validate-input" data-validate="Enter username">
                                    <input class="input100 form-control" type="text" name="username" placeholder="Username">

                                </div>

                                <div class="wrap-input100 validate-input" data-validate="Enter password">
                                    <input class="input100 form-control" type="password" name="pass" placeholder="Password">

                                </div>
                                <div class="col-6 d-flex align-items-center" style="height: 10vh;">
                                    <input class="form-check-input" type="checkbox" name="remember-me">
                                    <label class="">
                                        Remember me
                                    </label>
                                </div>
                                <div class="col-6 d-flex justify-content-end align-items-center" style="height: 10vh;">
                                    <a href="#" class="">Forgot password?</a>
                                </div>
                                <div class="col-12 d-flex justify-content-center ">
                                    <button class="col-5 login-btn mt-5 " >LOG IN</button>


                                </div>




                            </div>

                        </div>
                    </div>
                    <div class="row " style="height: 85vh;">
                        <div class=" d-flex justify-content-center align-items-center login-back">
                            <div class="row">
                                <h1 class="col-12">Hello,Friend!</h1>
                                <div class="col-12">
                                    <p>Enter your personal details and start<br>journey with us</p>
                                </div>

                                <div class="col-12 d-flex justify-content-center ">
                                    <button class="col-5  mt-5 signup-btn " onclick="SignUpSwift();">SIGN IN</button>


                                </div>

                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <div class="col-6 row " style="overflow: hidden;">
                <div class="container-login  col-12">
                    <div class="row " style="height: 85vh;">
                        <div class=" d-flex justify-content-center align-items-center signup-front">
                            <div class="row">
                                <h1 class="col-12">Welcome Back!</h1>
                                <div class="col-12">
                                    <p>To keep connected with us please login<br>with your personal info</p>
                                </div>

                                <div class="col-12 d-flex justify-content-center ">
                                    <button class="col-5  mt-5 signup-btn " onclick="loginSwift();">SIGN UP</button>


                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row " style="height: 85vh;">
                        <div class="d-flex align-items-center justify-content-center signup-back ">
                            <div class="row col-12 ">
                                <h1 class="col-12 login-head ">Create Account </h1>
                                <div class="wrap-input100 validate-input" data-validate="Enter username">
                                    <input class="input100 form-control" type="text" name="username" placeholder="Username">

                                </div>

                                <div class="wrap-input100 validate-input" data-validate="Enter password">
                                    <input class="input100 form-control" type="password" name="pass" placeholder="Password">

                                </div>
                                <div class="wrap-input100 validate-input" data-validate="Enter password">
                                    <input class="input100 form-control" type="password" name="pass" placeholder="Password Again">

                                </div>
                                
                                <div class="col-12 d-flex justify-content-center ">
                                    <button class="col-5 login-btn mt-1 " >SIGN UP</button>


                                </div>




                            </div>

                        </div>
                    </div>


                </div>

            </div>

        </div>
    </div>

</div>

<?php include 'footer.php' ?>
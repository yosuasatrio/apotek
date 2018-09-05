                <?php include "temp/leftbar.php"; ?>
                    <div class="col-sm-9" id="content">            
                        <div class="breadcrumbs">
                            <a href="home.html"><i class="fa fa-home"></i></a>
                            <a href="#">Login</a>
                        </div>
                        <div class="contentText">
                            <h1>Welcome, Please Sign In</h1>
                            <div class="row">
                                <div class="col-sm-6">
                                    <!--<div class="well">!-->
                                    <h2>New Customer</h2>
                                    <p>I am a new customer.</p>
                                    <p>By creating an account at steroid-shop.to you will be able to shop faster, be up to date on an orders status,
                                        and keep track of the orders you have previously made.</p>
                                    <a class="btn btn-primary reg_button" href="register.html">
                                        <i class="fa fa-caret-right"></i>&nbsp;
                                        Continue
                                    </a>
                                    <!--</div>!-->
                                </div>
                                <div style="border-left: 1px dashed #c1bebe" class="col-sm-6">
                                    <!--<div class="well">!-->
                                    <h2>Returning Customer</h2>
                                    <p>I am a returning customer</p>
                                    <form enctype="multipart/form-data"  role="form" class="form-horizontal add_margin">
                                        <div class="form-group">
                                            <label for="input-email" class="control-label col-sm-4">E-Mail Address</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="input-email" placeholder="E-Mail Address" value="" name="email">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="input-password" class="control-label col-sm-4">Password</label>
                                            <div class="col-sm-8">
                                                <input type="password" class="form-control" id="input-password" placeholder="Password" value="" name="password">

                                            </div>

                                        </div>
                                        <p class="cat_name"> <a href="#">Forgot Passowrd? Click here.</a></p>
                                        <!--<input type="submit" value="Login" class="btn btn-primary reg_button" />!-->
                                        <button class="btn btn-primary reg_button" value="Login" type="submit">
                                            <i class="fa fa-key"></i>&nbsp;
                                            Login                            
                                        </button>
                                    </form>
                                    <!--</div>!-->
                                </div>
                            </div>
                        </div>
                    </div>
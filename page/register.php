                <?php include "temp/leftbar.php"; ?>
                <?php 
                    $user = new classApotek();

                    if(isset($_POST['register']))
                    {
                        $first_name = trim(htmlentities(strip_tags($_POST['firstname'])));
                        $last_name = trim(htmlentities(strip_tags($_POST['lastname'])));

                        $nama = $first_name . ' ' .$last_name;

                        $email = trim(htmlentities(strip_tags($_POST['email'])));
                        $password = trim(htmlentities(strip_tags($_POST['password'])));
                        $alamat = trim(htmlentities(strip_tags($_POST['address'])));
                        $no_telp = trim(htmlentities(strip_tags($_POST['telephone'])));

                        $add = $user->register($nama,$email,$password,$no_telp,$alamat);

                        if($add)
                        {
                        ?>
                        <script type="text/javascript">
                        swal({
                        title: 'BERHASIL!',
                        text: "Registrasi Berhasil",
                        type: 'success',
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'OK'
                        }).then((result) => {
                        if (result.value) {
                        window.location.href = 'home';
                        }
                        });
                        </script>
                        <?php
                        }
                    }
                ?>
                <div class="breadcrumbs">
                            <a href="home.html"><i class="fa fa-home"></i></a>
                            <a href="#">Register</a>
                        </div>
                        <h1>My Account Information</h1>
                        <p> <small><strong class="define_note"></strong></small>If you already have an account with us, please login at the 
                            <a href="login.html">login page</a>.</p>
                        <form class="form-horizontal" method="post" action="#">
                            <div class="contentText">  
                                <fieldset id="account">
                                    <h1>Your Personal Details</h1>
                                    <div class="form-group required">
                                        <label for="input-firstname" class="col-sm-2 control-label">First Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="input-firstname" placeholder="First Name" value="" name="firstname" required>
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <label for="input-lastname" class="col-sm-2 control-label">Last Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="input-lastname" placeholder="Last Name" value="" name="lastname" required>
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <label for="input-email" class="col-sm-2 control-label">E-Mail</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="input-email" placeholder="E-Mail" value="" name="email" required>
                                        </div>
                                    </div>
                                    <div class="form-group required">
                                        <label for="input-telephone" class="col-sm-2 control-label">Telephone</label>
                                        <div class="col-sm-10">
                                            <input type="tel" class="form-control" id="input-telephone" placeholder="Telephone" value="" name="telephone" required>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset id="address">
                                    <h1>Your Address</h1>
                                    <div class="form-group required">
                                        <label for="input-address-1" class="col-sm-2 control-label">Address</label>
                                        <div class="col-sm-10">
                                            <textarea type="text" class="form-control" id="input-address-1" placeholder="Address 1" value="" name="address" required></textarea>
                                        </div>
                                    </div>
                                    <h1>Your Password</h1>
                                    <div class="form-group required">
                                        <label for="input-password" class="col-sm-2 control-label">Password</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="input-password" placeholder="Password" value="" name="password" required>
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="buttons">
                                    <div class="pull-right" style="margin-top:20px;">
                                        <input type="submit" class="btn btn-primary reg_button" value="Register" name="register" >
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
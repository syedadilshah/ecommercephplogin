<?php error_reporting(E_ALL);
?>
<?php include 'conn.php';

    if(isset($_POST['submit'])){
        $name = $_POST['uname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $password = $_POST['password'];
        // $query = "INSERT INTO users SET uname='".$name."', email='".$email."', password='".$password."'";
        $query = "INSERT INTO user Set name='".$name."', email='".$email."', phone='".$phone."', address='".$address."', password='".$password."'";
        // echo $query;
        // exit();
        $result = mysqli_query($con,$query);
        if($result==TRUE)
        {
            header('location:index.php');
        }
    }
?>


<?php include 'head.php'; ?>


  <div class="login">
    <div class="container">
        <div class="row justify-content-center align-items-center vh-100">
            <div class="col-lg-5">
                <div class="login-wrap">
                    <div class="login-info">
                        <h4 class="text-center" >Register</h4>
                        <div class="form">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="my-name">Name</label>
                                    <input id="my-name" class="form-control" type="name" name="uname" required>
                                </div>
                                <div class="form-group">
                                    <label for="my-email">Email</label>
                                    <input id="my-email" class="form-control" type="email" name="email" required>
                                </div>
                                <div class="form-group">
                                    <label for="my-phone">Phone</label>
                                    <input id="my-phone" class="form-control" type="text" name="phone" required>
                                </div>
                                <div class="form-group">
                                    <label for="my-address">Address</label>
                                    <input id="my-address" class="form-control" type="text" name="address" required>
                                </div>
                                <div class="form-group">
                                    <label for="my-password">password</label>
                                    <input id="my-password" class="form-control" type="password" name="password" required>
                                </div>
                                <!-- <div class="form-group">
                                    <label for="my-password">Confirm password</label>
                                    <input id="my-password" class="form-control" type="password" name="cpassword">
                                </div> -->
                                <div class="form-group">
                                    <button class="btn form-control " type="submit" name="submit">register</button>
                                </div>
                                <div class="form-group">
                                    <span> Already have an account?</span>
                                    <span>
                                    <a class="" href="login.php">Login in</a></span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
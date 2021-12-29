<?php include 'conn.php'; ?>

<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
} 
 


$error=""; 


if(isset($_POST["login"]))  
{  
if(empty($_POST["email"]) || empty($_POST["password"]))  
{  
    $error =  "Both Fields are required";   
}  
else  
{  
     $username = mysqli_real_escape_string($con, $_POST["email"]);  
     $password = mysqli_real_escape_string($con, $_POST["password"]);  
      $query = "SELECT * FROM user WHERE email = '$username' AND password = '$password'";  

     $result = mysqli_query($con, $query);  
     if(mysqli_num_rows($result) > 0)  
     {  
       
                    $_SESSION['email'] = $username;
                    header("location:index.php");  
              
            
     }  
     else  
     {  
          $error =  "Wrong User Details";  
     }  
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
                        <h4 class="text-center" >login</h4>
                        <div class="form">
                           <h5><?php echo $error ?> </strong></h5> 
     	                    


                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="my-email">Email</label>
                                    <input id="my-email" class="form-control" type="email" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="my-cpassword">password</label>
                                    <input id="my-cpassword" class="form-control" type="password" name="password">
                                </div>
                                <div class="form-group">
                                <input type="submit" class="btn form-control" name="login" value="Login" > 
                                </div>
                                <div class="form-group">
                                    <span> Don't have an account?</span>
                                    <span>
                                    <a class="" href="register.php">Sign up</a></span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
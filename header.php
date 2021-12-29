<?php 

include "conn.php"

?>

<?php 

if (session_status() === PHP_SESSION_NONE) {
    session_start();
} 
if(isset($_SESSION['email'])){
$is_admin= $_SESSION['email']; 
$query66 = "SELECT email from user WHERE email = '".$is_admin."' ";
$result66 = mysqli_query($con, $query66);
$userdata = mysqli_fetch_array($result66);
}
?>


<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container-fluid">
        <div class="logo">
            <a class="navbar-brand" href="#">
                <img src="assets/images/logo.png" class="img-fluid" alt="ogo">
            </a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="product.php">All Products</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="home-appliance.php">Home appliances</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="kitchen.php">Kitchen appliances</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="about.php">about</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="contact.php">contact</a>
            </li>
        </ul>
        <form class="d-flex">
            <div class="btns-icons">
                <button class="btn"><i class="fal fa-search" aria-hidden="true"></i></button>
                <button class="btn"><i class="far fa-heart"></i></button>
                <button class="btn " ><i class="far fa-shopping-cart"></i></button>
                <?php 
                     if (!isset($is_admin)) {
                         
                      ?>

                <a class="btn" href="login.php"> login <i class="fas fa-sign-in-alt    "></i> </a>

                <?php }else {  ?>

                    <a class="btn" href="logout.php"> Log Out <i class="fas fa-sign-in-alt    "></i> </a>

                    <?php } ?>
            </div>
        </form>
        </div>
    </div>
</nav>

<footer>

  <!-- Footer Links -->
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <div class="ft-wrap">
          <div class="logo">
            <img src="assets/images/logo.png" class="img-fluid" alt="">
          </div>
          <div class="icons">
            <ul>
              <li><a href="javascript:;"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="javascript:;"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
              <li><a href="javascript:;"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
              <li><a href="javascript:;"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="ft-wrap">
          <h5>Customer Services</h5>
          <ul>
            <li><a href="javascript:;">My Account</a></li>
            <li><a href="javascript:;">Track Your Order</a></li>
            <li><a href="javascript:;">FAQs</a></li>
            <li><a href="javascript:;">Payment Methods</a></li>
            <li><a href="javascript:;">Shipping Guide</a></li>
            <li><a href="javascript:;">Products Support</a></li>
            <li><a href="javascript:;">Gift Card Balance</a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="ft-wrap">
          <h5>More From Rubix</h5>
          <ul>
            <li><a href="javascript:;">About Rubix</a></li>
            <li><a href="javascript:;">Our Guarantees</a></li>
            <li><a href="javascript:;">Terms and Conditions</a></li>
            <li><a href="javascript:;">Wishlist</a></li>
            <li><a href="javascript:;">Return Policy</a></li>
            <li><a href="javascript:;">Delivery & Return</a></li>
            <li><a href="javascript:;">Sitemap</a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="ft-wrap">
          
        <h5>Let’s Talk</h5>
          <ul>
            <li><a href="javascript:;"><span class="pr-3"><i class="fas fa-headphones"></i></span> +391 (0)35 2568 4593</a></li>
            <li><a href="javascript:;"><span class="pr-3"><i class="fa fa-envelope" aria-hidden="true"></i></span>hello@domain.com</a></li>
          </ul>
          <h5>Find Us</h5>
          <ul>
            <li><a href="javascript:;"><i class="fa fa-map-marker" aria-hidden="true"></i> 502 New Design Str Melbourne, Australia</a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-12">
        
      </div>
    </div>
  </div>

</footer>
<!-- Footer -->


<button
        type="button"
        class="btn btn-danger btn-floating btn-lg"
        id="btn-back-to-top"
        >
  <i class="fa fa-arrow-up"></i>
</button>
<style type="text/css">
  #btn-back-to-top {
  position: fixed;
  bottom: 20px;
  right: 20px;
  height:45px;
  width:45px;
  z-index: 5;
  padding: 0 !important;
  background-color: transparent;
  border-radius: 50px;
  border: 1px solid #ffffff;
  display: none;

}
</style>
<script type="text/javascript">
 
let mybutton = document.getElementById("btn-back-to-top");
 
window.onscroll = function () {
  
  scrollFunction();
 
};
 
function scrollFunction() {
 
  if (
 
    document.body.scrollTop > 20 ||
 
    document.documentElement.scrollTop > 20
 
  ) {
 
    mybutton.style.display = "block";
 
  } else {
 
    mybutton.style.display = "none";
 
  }
 
}
 
// When the user clicks on the button, scroll to the top of the document
 
mybutton.addEventListener("click", backToTop);
 
 
function backToTop() {
 
  document.body.scrollTop = 0;
 
  document.documentElement.scrollTop = 0;
 
}

 

</script>


<script>
// Set the date we're counting down to
var countDownDate = new Date("Jan 5, 2022 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  
  document.getElementById("demo1").innerHTML =  days + " ";

  document.getElementById("demo2").innerHTML =  hours + " ";
  
  document.getElementById("demo3").innerHTML =  minutes + " ";
  
  document.getElementById("demo4").innerHTML =  seconds + " ";

    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>
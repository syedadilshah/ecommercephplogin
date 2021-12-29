<?php include 'conn.php'; ?>
<?php include 'head.php'; ?>

            
  <?php include 'header.php'; ?>

  <div class="home-banner">
      <div class="container">
          <div class="row">
              <div class="col-lg-6">
                  <div class="banner-wrap">
                      <div class="banner-info">
                          <span>Quick Parcel Delivery, <b class="reds">from $25</b></span>
                          <h2>The Products Which You Need</h2>
                          <a href="javasrcipt:;" class="btn">SHOP NOW</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="comming">
        <div class="container">
            <div class="text-center">
                <h2>commimg soon</h2>
            </div>
        </div>
  </div>

<?php include 'footer.php'; ?>



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <!-- slick slider -->
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="assets/js/slick/slick.js" type="text/javascript" charset="utf-8"></script>

    <script>
        $(document).on('ready', function() {
            $(".center").slick({
                dots: false,
                prevArrow: false,
                nextArrow: false,
                infinite: true,
                centerMode: false,
                slidesToShow: 6,
                slidesToScroll: 1,
                autoplay:true
            });
            $(".regular").slick({
            dots: true,
            prevArrow: false,
            nextArrow: false,
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            responsive: [
            {
            breakpoint: 768,
            settings: {
                arrows: false,
                centerMode: false,
                slidesToShow: 1,
                slidesToScroll: 1,
            }
            },
            {
            breakpoint: 480,
            settings: {
                arrows: false,
                centerMode: false,
                slidesToShow: 1,
                slidesToScroll: 1,
            }
            }
        ]
      });
        });
    </script>
  </body>
</html>
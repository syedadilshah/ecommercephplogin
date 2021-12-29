<?php include "conn.php" ?>

<?php 
if(isset($_SESSION['email']))
{
     $is_admin= $_SESSION['email'];
     $query = " SELECT * FROM user WHERE email = '".$is_admin."' " ;
     $result =mysqli_query($conn,$query);
     $rows= mysqli_fetch_array($result);
     


}

else {
    header('location:login.php');
}


?>

    
    <?php include 'head.php'; ?>
    <?php include 'header.php'; ?>

  <div class="lazy slider">
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
  </div>

  <div class="collection">
      <div class="container-fluid">
          <div class="row">
              <div class="col-lg-3 collects">
                  <div class="collection-wrap">
                      <div class="collect-img">
                          <img src="assets/images/pro1.png" class="img-fluid" alt="">
                          <div class="collect-info">
                              <h5>Lorem Ipsum Dolor</h5>
                              <p class="txt">Lorem ipsum dolor sit amet</p>
                              <p class="rds">From $35</p>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-3 collects">
                  <div class="collection-wrap">
                      <div class="collect-img">
                          <img src="assets/images/pro2.png" class="img-fluid" alt="">
                          <div class="collect-info">
                              <h5>Lorem Ipsum Dolor</h5>
                              <p class="txt">Lorem ipsum dolor sit amet</p>
                              <p class="rds">From $35</p>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-6 collects">
                  <div class="collection-wrap">
                      <div class="collect-img">
                          <img src="assets/images/pro3.png" class="img-fluid" alt="">
                          <div class="collect-info">
                              <h5>Lorem Ipsum Dolor</h5>
                              <p class="txt">Lorem ipsum dolor sit amet</p>
                              <p class="rds">From $35</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="trending product">
      <div class="container-fluid">
            <div class="head-title">
                <h2>trending products</h2>
                <p>top view in this week</p>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="trending">
                        <div class="trend-img">
                            <img src="assets/images/trending.png" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="trends">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="product-wrap">
                                    <div class="product-info">
                                        <div class="imgs">
                                            <img src="assets/images/trend1.png" class="img-fluid" alt="product">
                                            <div class="imgs-btn">
                                                <div class="icons">
                                                    <div class="icn1">
                                                    <a href="javascript:;" class="btn"><i class="far fa-heart" aria-hidden="true"></i></a>
                                                    </div>
                                                    <div class="icn1">
                                                    <a href="javascript:;" class="btn"><i class="far fa-eye" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                                <div class="btns">
                                                    <a href="javascript:;" class="btn"><i class="fa fa-shopping-cart" aria-hidden="true"></i> add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content pt-3">
                                            <h6>DBA product</h6>
                                            <div class="num">
                                                <span class="gry">$57.00</span>
                                                <span class="red">$52.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="product-wrap">
                                    <div class="product-info">
                                        <div class="imgs">
                                            <img src="assets/images/trend2.png" class="img-fluid" alt="product">
                                            <div class="imgs-btn">
                                                <div class="icons">
                                                    <div class="icn1">
                                                    <a href="javascript:;" class="btn"><i class="far fa-heart" aria-hidden="true"></i></a>
                                                    </div>
                                                    <div class="icn1">
                                                    <a href="javascript:;" class="btn"><i class="far fa-eye" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                                <div class="btns">
                                                    <a href="javascript:;" class="btn"><i class="fa fa-shopping-cart" aria-hidden="true"></i> add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content pt-3">
                                            <h6>DBA product</h6>
                                            <div class="num">
                                                <span class="gry">$57.00</span>
                                                <span class="red">$52.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="product-wrap">
                                    <div class="product-info">
                                        <div class="imgs">
                                            <img src="assets/images/trend3.png" class="img-fluid" alt="product">
                                            <div class="imgs-btn">
                                                <div class="icons">
                                                    <div class="icn1">
                                                    <a href="javascript:;" class="btn"><i class="far fa-heart" aria-hidden="true"></i></a>
                                                    </div>
                                                    <div class="icn1">
                                                    <a href="javascript:;" class="btn"><i class="far fa-eye" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                                <div class="btns">
                                                    <a href="javascript:;" class="btn"><i class="fa fa-shopping-cart" aria-hidden="true"></i> add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content pt-3">
                                            <h6>DBA product</h6>
                                            <div class="num">
                                                <span class="gry">$57.00</span>
                                                <span class="red">$52.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="trends">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="product-wrap">
                                    <div class="product-info">
                                        <div class="imgs">
                                            <img src="assets/images/trend4.png" class="img-fluid" alt="product">
                                            <div class="imgs-btn">
                                                <div class="icons">
                                                    <div class="icn1">
                                                    <a href="javascript:;" class="btn"><i class="far fa-heart" aria-hidden="true"></i></a>
                                                    </div>
                                                    <div class="icn1">
                                                    <a href="javascript:;" class="btn"><i class="far fa-eye" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                                <div class="btns">
                                                    <a href="javascript:;" class="btn"><i class="fa fa-shopping-cart" aria-hidden="true"></i> add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content pt-3">
                                            <h6>DBA product</h6>
                                            <div class="num">
                                                <span class="gry">$57.00</span>
                                                <span class="red">$52.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="product-wrap">
                                    <div class="product-info">
                                        <div class="imgs">
                                            <img src="assets/images/trend5.png" class="img-fluid" alt="product">
                                            <div class="imgs-btn">
                                                <div class="icons">
                                                    <div class="icn1">
                                                    <a href="javascript:;" class="btn"><i class="far fa-heart" aria-hidden="true"></i></a>
                                                    </div>
                                                    <div class="icn1">
                                                    <a href="javascript:;" class="btn"><i class="far fa-eye" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                                <div class="btns">
                                                    <a href="javascript:;" class="btn"><i class="fa fa-shopping-cart" aria-hidden="true"></i> add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content pt-3">
                                            <h6>DBA product</h6>
                                            <div class="num">
                                                <span class="gry">$57.00</span>
                                                <span class="red">$52.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="product-wrap">
                                    <div class="product-info">
                                        <div class="imgs">
                                            <img src="assets/images/trend6.png" class="img-fluid" alt="product">
                                            <div class="imgs-btn">
                                                <div class="icons">
                                                    <div class="icn1">
                                                    <a href="javascript:;" class="btn"><i class="far fa-heart" aria-hidden="true"></i></a>
                                                    </div>
                                                    <div class="icn1">
                                                    <a href="javascript:;" class="btn"><i class="far fa-eye" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                                <div class="btns">
                                                    <a href="javascript:;" class="btn"><i class="fa fa-shopping-cart" aria-hidden="true"></i> add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content pt-3">
                                            <h6>DBA product</h6>
                                            <div class="num">
                                                <span class="gry">$57.00</span>
                                                <span class="red">$52.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
      </div>
  </div>

  <div class="headphones">
      <div class="container-fluid">
          <div class="head-wrap">
              <div class="head-img">
                  <img src="assets/images/headphone1.png" class="img-fluid" alt="">
              </div>
          </div>
          <div class="sounds">          
            <div class="row">
              <div class="col-lg-6">
                  <div class="head-wrap">
                      <div class="head-img">
                          <img src="assets/images/headphone2.png" class="img-fluid" alt="">
                          <div class="head-info">
                              <div class="content">
                                <h5>Lorem Ipsum Dolor</h5>
                                <p class="txt">Lorem ipsum dolor sit amet</p>
                                <p class="rds">From $35</p>
                              </div>
                              <div class="btns">
                                  <a href="javascript:;" class="btn">SHOP NOW</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-6">
                  <div class="head-wrap">
                      <div class="head-img">
                          <img src="assets/images/headphone3.png" class="img-fluid" alt="">
                          <div class="head-info">
                              <div class="content">
                                <h5>Lorem Ipsum Dolor</h5>
                                <p class="txt">Lorem ipsum dolor sit amet</p>
                                <p class="rds">From $35</p>
                              </div>
                              <div class="btns">
                                  <a href="javascript:;" class="btn">SHOP NOW</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
          </div>
      </div>
  </div>


  <div class="product">
      <div class="container-fluid">
            <div class="head-title">
                <h2>Best Selling Products</h2>
                <p>Top Sale In This Week</p>
            </div>
          <div class="row">
              <div class="col-lg-2">
                  <div class="product-wrap">
                      <div class="product-info">
                          <div class="imgs">
                              <img src="assets/images/pro4.png" class="img-fluid" alt="product">
                              <div class="imgs-btn">
                                  <div class="icons">
                                      <div class="icn1">
                                      <a href="javascript:;" class="btn"><i class="far fa-heart" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="icn1">
                                      <a href="javascript:;" class="btn"><i class="far fa-eye" aria-hidden="true"></i></a>
                                    </div>
                                  </div>
                                  <div class="btns">
                                      <a href="javascript:;" class="btn"><i class="fa fa-shopping-cart" aria-hidden="true"></i> add to cart</a>
                                  </div>
                              </div>
                          </div>
                          <div class="product-content pt-3">
                              <h6>DBA product</h6>
                              <div class="num">
                                  <span class="gry">$57.00</span>
                                  <span class="red">$52.00</span>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-2">
                  <div class="product-wrap">
                      <div class="product-info">
                          <div class="imgs">
                              <img src="assets/images/pro5.png" class="img-fluid" alt="product">
                              <div class="imgs-btn">
                                  <div class="icons">
                                      <div class="icn1">
                                      <a href="javascript:;" class="btn"><i class="far fa-heart" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="icn1">
                                      <a href="javascript:;" class="btn"><i class="far fa-eye" aria-hidden="true"></i></a>
                                    </div>
                                  </div>
                                  <div class="btns">
                                      <a href="javascript:;" class="btn"><i class="fa fa-shopping-cart" aria-hidden="true"></i> add to cart</a>
                                  </div>
                              </div>
                          </div>
                          <div class="product-content pt-3">
                              <h6>DBA product</h6>
                              <div class="num">
                                  <span class="gry">$57.00</span>
                                  <span class="red">$52.00</span>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-2">
                  <div class="product-wrap">
                      <div class="product-info">
                          <div class="imgs">
                              <img src="assets/images/pro6.png" class="img-fluid" alt="product">
                              <div class="imgs-btn">
                                  <div class="icons">
                                      <div class="icn1">
                                      <a href="javascript:;" class="btn"><i class="far fa-heart" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="icn1">
                                      <a href="javascript:;" class="btn"><i class="far fa-eye" aria-hidden="true"></i></a>
                                    </div>
                                  </div>
                                  <div class="btns">
                                      <a href="javascript:;" class="btn"><i class="fa fa-shopping-cart" aria-hidden="true"></i> add to cart</a>
                                  </div>
                              </div>
                          </div>
                          <div class="product-content pt-3">
                              <h6>DBA product</h6>
                              <div class="num">
                                  <span class="gry">$57.00</span>
                                  <span class="red">$52.00</span>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-2">
                  <div class="product-wrap">
                      <div class="product-info">
                          <div class="imgs">
                              <img src="assets/images/pro7.png" class="img-fluid" alt="product">
                              <div class="imgs-btn">
                                  <div class="icons">
                                      <div class="icn1">
                                      <a href="javascript:;" class="btn"><i class="far fa-heart" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="icn1">
                                      <a href="javascript:;" class="btn"><i class="far fa-eye" aria-hidden="true"></i></a>
                                    </div>
                                  </div>
                                  <div class="btns">
                                      <a href="javascript:;" class="btn"><i class="fa fa-shopping-cart" aria-hidden="true"></i> add to cart</a>
                                  </div>
                              </div>
                          </div>
                          <div class="product-content pt-3">
                              <h6>DBA product</h6>
                              <div class="num">
                                  <span class="gry">$57.00</span>
                                  <span class="red">$52.00</span>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-2">
                  <div class="product-wrap">
                      <div class="product-info">
                          <div class="imgs">
                              <img src="assets/images/pro8.png" class="img-fluid" alt="product">
                              <div class="imgs-btn">
                                  <div class="icons">
                                      <div class="icn1">
                                      <a href="javascript:;" class="btn"><i class="far fa-heart" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="icn1">
                                      <a href="javascript:;" class="btn"><i class="far fa-eye" aria-hidden="true"></i></a>
                                    </div>
                                  </div>
                                  <div class="btns">
                                      <a href="javascript:;" class="btn"><i class="fa fa-shopping-cart" aria-hidden="true"></i> add to cart</a>
                                  </div>
                              </div>
                          </div>
                          <div class="product-content pt-3">
                              <h6>DBA product</h6>
                              <div class="num">
                                  <span class="gry">$57.00</span>
                                  <span class="red">$52.00</span>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-2">
                  <div class="product-wrap">
                      <div class="product-info">
                          <div class="imgs">
                              <img src="assets/images/pro9.png" class="img-fluid" alt="product">
                              <div class="imgs-btn">
                                  <div class="icons">
                                      <div class="icn1">
                                      <a href="javascript:;" class="btn"><i class="far fa-heart" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="icn1">
                                      <a href="javascript:;" class="btn"><i class="far fa-eye" aria-hidden="true"></i></a>
                                    </div>
                                  </div>
                                  <div class="btns">
                                      <a href="javascript:;" class="btn"><i class="fa fa-shopping-cart" aria-hidden="true"></i> add to cart</a>
                                  </div>
                              </div>
                          </div>
                          <div class="product-content pt-3">
                              <h6>DBA product</h6>
                              <div class="num">
                                  <span class="gry">$57.00</span>
                                  <span class="red">$52.00</span>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-2">
                  <div class="product-wrap">
                      <div class="product-info">
                          <div class="imgs">
                              <img src="assets/images/pro10.png" class="img-fluid" alt="product">
                              <div class="imgs-btn">
                                  <div class="icons">
                                      <div class="icn1">
                                      <a href="javascript:;" class="btn"><i class="far fa-heart" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="icn1">
                                      <a href="javascript:;" class="btn"><i class="far fa-eye" aria-hidden="true"></i></a>
                                    </div>
                                  </div>
                                  <div class="btns">
                                      <a href="javascript:;" class="btn"><i class="fa fa-shopping-cart" aria-hidden="true"></i> add to cart</a>
                                  </div>
                              </div>
                          </div>
                          <div class="product-content pt-3">
                              <h6>DBA product</h6>
                              <div class="num">
                                  <span class="gry">$57.00</span>
                                  <span class="red">$52.00</span>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-2">
                  <div class="product-wrap">
                      <div class="product-info">
                          <div class="imgs">
                              <img src="assets/images/pro11.png" class="img-fluid" alt="product">
                              <div class="imgs-btn">
                                  <div class="icons">
                                      <div class="icn1">
                                      <a href="javascript:;" class="btn"><i class="far fa-heart" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="icn1">
                                      <a href="javascript:;" class="btn"><i class="far fa-eye" aria-hidden="true"></i></a>
                                    </div>
                                  </div>
                                  <div class="btns">
                                      <a href="javascript:;" class="btn"><i class="fa fa-shopping-cart" aria-hidden="true"></i> add to cart</a>
                                  </div>
                              </div>
                          </div>
                          <div class="product-content pt-3">
                              <h6>DBA product</h6>
                              <div class="num">
                                  <span class="gry">$57.00</span>
                                  <span class="red">$52.00</span>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-2">
                  <div class="product-wrap">
                      <div class="product-info">
                          <div class="imgs">
                              <img src="assets/images/pro12.png" class="img-fluid" alt="product">
                              <div class="imgs-btn">
                                  <div class="icons">
                                      <div class="icn1">
                                      <a href="javascript:;" class="btn"><i class="far fa-heart" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="icn1">
                                      <a href="javascript:;" class="btn"><i class="far fa-eye" aria-hidden="true"></i></a>
                                    </div>
                                  </div>
                                  <div class="btns">
                                      <a href="javascript:;" class="btn"><i class="fa fa-shopping-cart" aria-hidden="true"></i> add to cart</a>
                                  </div>
                              </div>
                          </div>
                          <div class="product-content pt-3">
                              <h6>DBA product</h6>
                              <div class="num">
                                  <span class="gry">$57.00</span>
                                  <span class="red">$52.00</span>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-2">
                  <div class="product-wrap">
                      <div class="product-info">
                          <div class="imgs">
                              <img src="assets/images/pro13.png" class="img-fluid" alt="product">
                              <div class="imgs-btn">
                                  <div class="icons">
                                      <div class="icn1">
                                      <a href="javascript:;" class="btn"><i class="far fa-heart" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="icn1">
                                      <a href="javascript:;" class="btn"><i class="far fa-eye" aria-hidden="true"></i></a>
                                    </div>
                                  </div>
                                  <div class="btns">
                                      <a href="javascript:;" class="btn"><i class="fa fa-shopping-cart" aria-hidden="true"></i> add to cart</a>
                                  </div>
                              </div>
                          </div>
                          <div class="product-content pt-3">
                              <h6>DBA product</h6>
                              <div class="num">
                                  <span class="gry">$57.00</span>
                                  <span class="red">$52.00</span>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
    
  <div class="news">
      <div class="container">
          <div class="news-wrap">
            <div class="letter-box">
                <h3>Subcribe To Our Newsletter</h3>
                <p>Sign up for the weekly newsletter.</p>

                <form action="">
                    <div class="form-group">
                        <input id="my-input" class="form-control" type="text" name="">
                        <a href="javascript:;" class="btn">Subscribe</a>
                    </div>
                </form>
                
                <p>We respect your privacy, so we never share your info.</p>
            </div>
          </div>
      </div>
  </div>

    <div class="package">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="package-wrap bbr">
                        <div class="imgs text-center">
                            <img src="assets/images/pkgs1.png" class="img-fluid" alt="">
                        </div>
                        <div class="texts text-center">
                            <h6>Free Worldwide Shipping</h6>
                            <p>On all orders over $75.00</p>
                            <a href="javascript:;">Learn more <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="package-wrap bbr">
                        <div class="imgs text-center">
                            <img src="assets/images/pkgs2.png" class="img-fluid" alt="">
                        </div>
                        <div class="texts text-center">
                            <h6>100% Payment Secure</h6>
                            <p>We ensure secure payment with PEV</p>
                            <a href="javascript:;">Learn more <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="package-wrap">
                        <div class="imgs text-center">
                            <img src="assets/images/pkgs3.png" class="img-fluid" alt="">
                        </div>
                        <div class="texts text-center">
                            <h6>30 Days Return</h6>
                            <p>Return it within 20 day for an exchange</p>
                            <a href="javascript:;">Learn more <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="blog">
        <div class="container">
            <div class="head-title">
                <h2>blogs</h2>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos</p>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="blog-wrap">
                        <div class="b-img">
                            <img src="assets/images/blog1.png" class="img-fluid" alt="">
                        </div>
                        <div class="b-info">
                            <h5>Lorem ipsum dolor sit amet</h5>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p>
                                <!-- <div class="d-flex justify-content-between align-items-center mt-4">
                                    <div class="blog-btn">
                                        <a href="javascript:;" class="btn rd">read more <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="view">
                                    <i class="fas fa-eye"></i>
                                    <span class="">2.5k</span>
                                    </div>
                                </div> -->
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="blog-wrap">
                        <div class="b-img">
                            <img src="assets/images/blog2.png" class="img-fluid" alt="">
                        </div>
                        <div class="b-info">
                            <h5>Lorem ipsum dolor sit amet</h5>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p>
                                <!-- <div class="d-flex justify-content-between align-items-center mt-4">
                                    <div class="blog-btn">
                                        <a href="javascript:;" class="btn rd">read more <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="view">
                                    <i class="fas fa-eye"></i>
                                    <span class="">2.5k</span>
                                    </div>
                                </div> -->
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="blog-wrap">
                        <div class="b-img">
                            <img src="assets/images/blog3.png" class="img-fluid" alt="">
                        </div>
                        <div class="b-info">
                            <h5>Lorem ipsum dolor sit amet</h5>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat.</p>
                                <!-- <div class="d-flex justify-content-between align-items-center mt-4">
                                    <div class="blog-btn">
                                        <a href="javascript:;" class="btn rd">read more <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                                    </div>
                                    <div class="view">
                                    <i class="fas fa-eye"></i>
                                    <span class="">2.5k</span>
                                    </div>
                                </div> -->
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <div class="instagram">
        <div class="container-fluid">
            <div class="head-title">
                <h2>Follow us on Instagram</h2>
                <p>@Dbaelectronics</p>
            </div>

            <section class="center slider">
                <div class="slide-img">
                    <img src="assets/images/pro8.png" class="img-fluid" alt="">
                </div>
                <div class="slide-img">
                    <img src="assets/images/pro9.png" class="img-fluid" alt="">
                </div>
                <div class="slide-img">
                    <img src="assets/images/pro10.png" class="img-fluid" alt="">
                </div>
                <div class="slide-img">
                    <img src="assets/images/pro11.png" class="img-fluid" alt="">
                </div>
                <div class="slide-img">
                    <img src="assets/images/pro12.png" class="img-fluid" alt="">
                </div>
                <div class="slide-img">
                    <img src="assets/images/pro13.png" class="img-fluid" alt="">
                </div>
                <div class="slide-img">
                    <img src="assets/images/pro4.png" class="img-fluid" alt="">
                </div>
                <div class="slide-img">
                    <img src="assets/images/pro5.png" class="img-fluid" alt="">
                </div>
                <div class="slide-img">
                    <img src="assets/images/pro7.png" class="img-fluid" alt="">
                </div>
            </section>
            
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
            $(".lazy").slick({
                dots: true,
                prevArrow: false,
                nextArrow: false,
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay:true
            });
            $(".center").slick({
                dots: false,
                prevArrow: false,
                nextArrow: false,
                infinite: true,
                centerMode: false,
                slidesToShow: 6,
                slidesToScroll: 1,
                autoplay:true,
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
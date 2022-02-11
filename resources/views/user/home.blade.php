 @include('includes.homeNav')
<!doctype html>
<html lang="zxx">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>SpryStore</title>
  <!-- Template CSS -->
  @include('includes.homeStyle')
  <!-- Template CSS -->

</head>
<body>
<!--w3l-banner-slider-main-->
   
<!-- //w3l-banner-slider-main -->
<section class="w3l-grids-hny-2">
  <!-- /content-6-section -->
  <div class="grids-hny-2-mian py-5">
    <div class="container py-lg-5">
        
      <h3 class="hny-title mb-0 text-center">Our <span>Categories</span></h3>
      <p class="mb-4 text-center">Handpicked Favourites just for you</p>
      <div class="welcome-grids row mt-5">
        @foreach($categories as $category)
        <div class="col-lg-2 col-md-4 col-6 welcome-image">
            <div class="boxhny13">
                <a href="{{ url('user/stores/'. $category->id) }}">
                    <img src="{{ asset('storage/'.$category->img) }}" class="img-fluid" alt="" />
                <div class="boxhny-content">
                  <h3 class="title">Product
                </div>
              </a>
            </div>
            <h4><a href="{{ url('user/stores/'. $category->id) }}">{{ $category->name }}</a></h4>

        </div>
        @endforeach
      </div>

    </div>
  </div>
</section>
<!-- //content-6-section -->


   <!-- //specification-6-->
     

<!-- //video-6-->

<!-- //products-->

<!-- //content-6-section -->
<section class="w3l-post-grids-6">
  <!-- /post-grids-->
  <div class="post-6-mian py-5">
    <div class="container py-lg-5">
        <h3 class="hny-title text-center mb-0 ">Latest Blog <span>Posts</span></h3>
        <p class="mb-5 text-center">Handpicked Favourites just for you</p>
      <div class="post-hny-grids row mt-5">
        <div class="col-lg-3 col-md-6 grids5-info column-img" id="zoomIn">
          <a href="#">
            <figure>
              <img class="img-fluid" src="/admin/home/assets/images/bg1.jpg" alt="blog-image">
            </figure>
          </a>

          <div class="blog-thumbhny-caption">
            <ul class="blog-info-list">
              <li><a href="#admin">By admin</a></li>
              <li class="date-post">
                Aug 10, 2020</li>
            </ul>
            <h4><a href="#">Here to bring your life style to the next level.</a></h4>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 grids5-info column-img" id="zoomIn">
          <a href="#">
            <figure>
              <img class="img-fluid" src="/admin/home/assets/images/bg2.jpg" alt="blog-image">
            </figure>
          </a>
          <div class="blog-thumbhny-caption">
            <ul class="blog-info-list">
              <li><a href="#admin">By admin</a></li>
              <li class="date-post">
                Aug 10, 2020</li>
            </ul>
            <h4><a href="#">Here to bring your life style to the next level.</a></h4>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 grids5-info column-img" id="zoomIn">
          <figure>
            <img class="img-fluid" src="/admin/home/assets/images/bg3.jpg" alt="blog-image">
          </figure>
          <div class="blog-thumbhny-caption">
            <ul class="blog-info-list">
              <li><a href="#admin">By admin</a></li>
              <li class="date-post">
                Aug 10, 2020</li>
            </ul>
            <h4><a href="#">Here to bring your life style to the next level.</a></h4>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 grids5-info column-img" id="zoomIn">
          <figure>
            <img class="img-fluid" src="/admin/home/assets/images/bg4.jpg" alt="blog-image">
          </figure>
          <div class="blog-thumbhny-caption">
            <ul class="blog-info-list">
              <li><a href="#admin">By admin</a></li>
              <li class="date-post">
                Aug 10, 2020</li>
            </ul>
            <h4><a href="#">Here to bring your life style to the next level.</a></h4>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
<!-- //post-grids-->
<section class="w3l-customers-sec-6">
  <div class="customers-sec-6-cintent py-5">
    <!-- /customers-->
    <div class="container py-lg-5">
        <h3 class="hny-title text-center mb-0 ">Customers <span>Love</span></h3>
        <p class="mb-5 text-center">What People Say</p>
      <div class="row customerhny my-lg-5 my-4">
        <div class="col-md-12">
          <div id="customerhnyCarousel" class="carousel slide" data-ride="carousel">

            <ol class="carousel-indicators">
              <li data-target="#customerhnyCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#customerhnyCarousel" data-slide-to="1"></li>
            </ol>
            <!-- Carousel items -->
            <div class="carousel-inner">

              <div class="carousel-item active">
                <div class="row">
                  <div class="col-md-3">
                    <div class="customer-info text-center">
                      <div class="feedback-hny">
                        <span class="fa fa-quote-left"></span>
                        <p class="feedback-para">Lorem, ipsum dolor sit amet consectetur
                          adipisicing elit. Labore rem, dicta assumenda mollitia molestias
                          quas nihil quasis.</p>
                      </div>
                      <div class="feedback-review mt-4">
                        <img src="/admin/home/assets/images/c1.jpg" class="img-fluid" alt="">
                        <h5>Smith Roy</h5>

                      </div>
                    </div>
                  </div>
                  <div class="col-md-3">
                      <div class="customer-info text-center">
                          <div class="feedback-hny">
                            <span class="fa fa-quote-left"></span>
                            <p class="feedback-para">Lorem, ipsum dolor sit amet consectetur
                              adipisicing elit. Labore rem, dicta assumenda mollitia molestias
                              quas nihil quasis.</p>
                          </div>
                          <div class="feedback-review mt-4">
                            <img src="/admin/home/assets/images/c2.jpg" class="img-fluid" alt="">
                            <h5>Lora Grill</h5>
    
                          </div>
                        </div>
                  </div>
                  <div class="col-md-3">
                      <div class="customer-info text-center">
                          <div class="feedback-hny">
                            <span class="fa fa-quote-left"></span>
                            <p class="feedback-para">Lorem, ipsum dolor sit amet consectetur
                              adipisicing elit. Labore rem, dicta assumenda mollitia molestias
                              quas nihil quasis.</p>
                          </div>
                          <div class="feedback-review mt-4">
                            <img src="/admin/home/assets/images/c3.jpg" class="img-fluid" alt="">
                            <h5>Laura Sten</h5>
    
                          </div>
                        </div>
                  </div>
                  <div class="col-md-3">
                      <div class="customer-info text-center">
                          <div class="feedback-hny">
                            <span class="fa fa-quote-left"></span>
                            <p class="feedback-para">Lorem, ipsum dolor sit amet consectetur
                              adipisicing elit. Labore rem, dicta assumenda mollitia molestias
                              quas nihil quasis.</p>
                          </div>
                          <div class="feedback-review mt-4">
                            <img src="/admin/home/assets/images/c4.jpg" class="img-fluid" alt="">
                            <h5>John Lee</h5>
    
                          </div>
                        </div>
                  </div>
                </div>
                <!--.row-->
              </div>
              <!--.item-->

              <div class="carousel-item">
                <div class="row">
                  <div class="col-md-3">
                      <div class="customer-info text-center">
                          <div class="feedback-hny">
                            <span class="fa fa-quote-left"></span>
                            <p class="feedback-para">Lorem, ipsum dolor sit amet consectetur
                              adipisicing elit. Labore rem, dicta assumenda mollitia molestias
                              quas nihil quasis.</p>
                          </div>
                          <div class="feedback-review mt-4">
                            <img src="/admin/home/assets/images/c4.jpg" class="img-fluid" alt="">
                            <h5>John Lee</h5>
    
                          </div>
                        </div>
                  </div>
                  <div class="col-md-3">
                      <div class="customer-info text-center">
                          <div class="feedback-hny">
                            <span class="fa fa-quote-left"></span>
                            <p class="feedback-para">Lorem, ipsum dolor sit amet consectetur
                              adipisicing elit. Labore rem, dicta assumenda mollitia molestias
                              quas nihil quasis.</p>
                          </div>
                          <div class="feedback-review mt-4">
                            <img src="/admin/home/assets/images/c3.jpg" class="img-fluid" alt="">
                            <h5>Laura Sten</h5>
    
                          </div>
                        </div>
                  </div>
                  <div class="col-md-3">
                      <div class="customer-info text-center">
                        <div class="feedback-hny">
                          <span class="fa fa-quote-left"></span>
                          <p class="feedback-para">Lorem, ipsum dolor sit amet consectetur
                            adipisicing elit. Labore rem, dicta assumenda mollitia molestias
                            quas nihil quasis.</p>
                        </div>
                        <div class="feedback-review mt-4">
                          <img src="/admin/home/assets/images/c1.jpg" class="img-fluid" alt="">
                          <h5>Smith Roy</h5>
  
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                        <div class="customer-info text-center">
                            <div class="feedback-hny">
                              <span class="fa fa-quote-left"></span>
                              <p class="feedback-para">Lorem, ipsum dolor sit amet consectetur
                                adipisicing elit. Labore rem, dicta assumenda mollitia molestias
                                quas nihil quasis.</p>
                            </div>
                            <div class="feedback-review mt-4">
                              <img src="/admin/home/assets/images/c2.jpg" class="img-fluid" alt="">
                              <h5>Lora Grill</h5>
      
                            </div>
                          </div>
                    </div>
                </div>
                <!--.row-->
              </div>
              <!--.item-->

            </div>
            <!--.carousel-inner-->
          </div>
          <!--.Carousel-->

        </div>
      </div>
    </div>
  </div>
</section>
<!-- //customers-->
<section class="w3l-subscription-6">
  <!--/customers -->
  <div class="subscription-infhny">
    <div class="container-fluid">

      <div class="subscription-grids row">

        <div class="subscription-right form-right-inf col-lg-6 p-md-5 p-4">
          <div class="p-lg-5 py-md-0 py-3">
            <h3 class="hny-title">Join us for FREE to get instant <span>email updates!</span></h3>
              <p>Subscribe and get notified at first on the latest update and offers!</p>

            <form action="#" method="post" class="signin-form mt-lg-5 mt-4">
              <div class="forms-gds">
                <div class="form-input">
                  <input type="email" name="" placeholder="Your email here" required="">
                </div>
                <div class="form-input"><button class="btn">Join</button></div>
              </div>
            </form>
          </div>
        </div>
        <div class="subscription-left forms-25-info col-lg-6 ">

        </div>
      </div>

      <!--//customers -->
    </div>
</section>
<!-- //customers-6-->

@include('includes.homeFooter')
 


  </body>

  </html>

@include('includes.homeJs')
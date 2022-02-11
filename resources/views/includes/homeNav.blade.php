
<section class="w3l-banner-slider-main">
  <div class="top-header-content">
    <header class="tophny-header">
      
      <!--/nav-->
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid serarc-fluid">
          <a class="navbar-brand" href="{{ url('user/home') }}">
            Spry<span class="lohny">S</span>tore</a>
          <!-- if logo is image enable this   
              <a class="navbar-brand" href="#index.html">
                <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
              </a> -->
          <!--/search-right-->
          <div class="search-right">

            <a href="#search" title="search"><span class="fa fa-search mr-2" aria-hidden="true"></span>
              <span class="search-text">Search here</span></a>
            <!-- search popup -->
            <div id="search" class="pop-overlay">
              <div class="popup">

                <form action="{{ url('user/search') }}" method="get" class="search-box">
                  <input type="search" placeholder="Keyword" name="search" required="required"
                    autofocus="">
                  <button type="submit" class="btn">Search</button>
                </form>

              </div>
              <a class="close" href="#">×</a>
            </div>
            <!-- /search popup -->
          </div>
          <!--//search-right-->
          <button class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon fa fa-bars"> </span>
          </button>
          
        </div>
      </nav>
      <!--//nav-->
    </header>
    <div class="bannerhny-content">

      <!--/banner-slider-->
      <div class="content-baner-inf">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="container">
                <div class="carousel-caption">
                  <h3>Welcome In
                    <br>Our Website</h3>
                  <a href="{{ url('/') }}" class="shop-button btn">
                    Go Home
                  </a>

                </div>
              </div>
            </div>
            <div class="carousel-item item2">
              <div class="container">
                <div class="carousel-caption">
                  <h3>Welcome In
                    <br>Our Website</h3>
                  <a href="{{ url('/') }}" class="shop-button btn">
                    Go Home
                  </a>

                </div>
              </div>
            </div>
            <div class="carousel-item item3">
              <div class="container">
                <div class="carousel-caption">
                  <h3>Welcome In
                    <br>Our Website</h3>
                  <a href="{{ url('/') }}" class="shop-button btn">
                    Go Home
                  </a>

                </div>
              </div>
            </div>
            <div class="carousel-item item4">
              <div class="container">
                <div class="carousel-caption">
                  <h3>Welcome In
                    <br>Our Website</h3>
                  <a href="{{ url('/') }}" class="shop-button btn">
                    Go Home
                  </a>
                </div>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <!--//banner-slider-->
      <!--//banner-slider-->
      <div class="right-banner">
        <div class="right-1">
          
        </div>
      </div>

    </div>

</section>
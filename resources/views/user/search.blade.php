 
@include('includes.homeNav')
 <<!DOCTYPE html>
 <html>
 <head>
   <meta charset="utf-8">
   <title>SpryStore</title>
   
   @include('includes.homeStyle')

 </head>
 <body>
    
  <section class="w3l-ecommerce-main">
  <!-- /products-->
  <div class="ecom-contenthny py-5">
    <div class="container py-lg-5">
      <h3 class="hny-title mb-0 text-center">The Result of Your <span>Search</span></h3>
      <!-- /row-->
      <div class="ecom-products-grids row mt-lg-5 mt-3">
        
         
        @foreach($stores as $store)
        <div class="col-lg-3 col-6 product-incfhny mt-4">
          <div class="product-grid2 transmitv">
            <div class="product-image2">
              <a href="#">
                <img class="pic-1 img-fluid" src="{{ asset('storage/'.$store->img) }}">
                 <img class="pic-2 img-fluid" src="{{ asset('storage/'.$store->img) }}">
              </a>
              
              <div class="transmitv single-item">
                 <button type="button"  onclick="window.location.href ='{{ url('user/info/'.$store->id) }}'" class="transmitv-cart ptransmitv-cart add-to-cart">
                    view details
                  </button>
              </div>
            </div>
            <div class="product-content">
              <h3 class="title"><a href="#">{{ $store->name }}</a></h3>
              <h5 style=" font-size: 18px;"><a href="#">
                @php $category = $store->category @endphp
                @if(!empty($category))
                {{ $category->name }}
                @endif
              </a>
            </h5>
              <span class="price">{{ $store->address }}</span>
            </div>
          </div>
        </div>

        @endforeach
      

      </div>
      <!-- //row-->
    </div>
  </div>
</section>
 
@include('includes.homeFooter')
 </body>
 </html>
@include('includes.homeJs')
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>SpryStore</title>
    @include('includes.homeStyle')
 

</head>
<body>
@include('includes.homeNav')
   <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="{{ url('user/add_rating') }}" method="get">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="store_id" value="{{ $store->id }}">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Rate {{ $store->name }}</h5>
        </div>
      <div class="modal-body">
        <div class="rating-css">
    <div class="star-icon">

        @if($user_rating)

                @for($i=1; $i<=$user_rating->stars_rated; $i++)
                 <input type="radio" value="{{$i}}" name="product_rating" checked id="rating{{$i}}">
                 <label for="rating{{$i}}" class="fa fa-star"></label>
                      @endfor

                       @for($j=$user_rating->stars_rated+1; $j<=5; $j++)
                      <input type="radio" value="{{ $j }}" name="product_rating"  id="rating{{$j}}">
                      <label for="rating{{$j}}" class="fa fa-star"></label>
                      @endfor
          
        @else
        <input type="radio" value="1" name="product_rating" checked id="rating1">
        <label for="rating1" class="fa fa-star"></label>
        <input type="radio" value="2" name="product_rating" id="rating2">
        <label for="rating2" class="fa fa-star"></label>
        <input type="radio" value="3" name="product_rating" id="rating3">
        <label for="rating3" class="fa fa-star"></label>
        <input type="radio" value="4" name="product_rating" id="rating4">
        <label for="rating4" class="fa fa-star"></label>
        <input type="radio" value="5" name="product_rating" id="rating5">
        <label for="rating5" class="fa fa-star"></label>
        @endif
    </div>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </form>
    </div>
  </div>
</div>


<div class="container">
    <section class="member-details">

      
        <div class="container">
          <h3 class="hny-title mb-0 text-center"style="margin-top:70px;">Store <span>Details</span></h3>
             <p class="text-center" >Handpicked Favourites just for you</p>
            <div class="row" style="margin-top:100px;margin-bottom: 180px;">
                <div class="col-lg-3 col-md-4">
                    <div class="img-container">
                        <img src="{{ asset('storage/'.$store->img) }}" alt="team member" class="pic-1 img-fluid">
                    </div>
                </div>

                <div class="col-lg-9 col-md-8">
                    <div class="member_designation">
                      <hr/>
                        <h2>{{ $store->name }}</h2>
                        <span>{{ $store->address }}</span>
                    </div>

                    <div class="rating">
                       @for($i=1; $i<=$rating_value; $i++)
                      <i class="fa fa-star checked"></i>
                      @endfor

                       @for($j=$rating_value+1; $j<=5; $j++)
                      <i class="fa fa-star"></i>
                      @endfor
                    </div>
                   
                   <button style="margin-top: 50px;" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Rate this Store
                    </button>
                    
                </div>

            </div>
        </div>
        
    </section>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


@include('includes.homeFooter')
</body>
</html>

@include('includes.homeJs')


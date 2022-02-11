
@extends('layouts.app')

@section('page-name')
	   <a class="h5 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="{{ url('/rating') }}">Ratings</a>
	   @stop
@section('content')

	@include('includes.tableStyle')

	<style type="text/css">
				.checked{
				    color: #ffe400;
				  }

			</style>
	
       <link href="/admin/search/css/main.css" rel="stylesheet" />

       
       
		<div class="limiter">
      
		<div class="container-table100">

			<div class="wrap-table100">
			 <div class="s003">
      <form action="{{ url('rating/search') }}" method="get">
        <div class="inner-form">
          
          <div class="input-field second-wrap">
            <input name="search" type="search" placeholder="Enter Keywords?" />
          </div>
          <div class="input-field third-wrap">
            <button class="btn-search" type="submit">
              <svg class="svg-inline--fa fa-search fa-w-16" aria-hidden="true" data-prefix="fas" data-icon="search" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path fill="currentColor" d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
              </svg>
            </button>
          </div>
        </div>
      </form>
    </div>
                 
				<table class="table">
							<div class="row header">
								
								<div class="cell">#ID</div>
								<div class="cell">Image</div>
								<div class="cell">Name</div>
								<div class="cell">Number of rating</div>
								<div class="cell"></div>
								<div class="cell">Rating Average</div>
								<div class="cell"></div>
								
								
								
								
							</div>
							<tbody>
								@foreach($ratings as $rating)

								<tr class="row">
									<td class="cell">{{ $rating->id }}</td>
									<td class="cell"><img height="50" width="50" src="{{ asset('storage/'.$rating->img) }}"></td>
									<td class="cell">{{ $rating->name }}</td>
									<td class="cell">{{ $rating->usernum }}</td>
									<td class="cell"></td>
									<td class="cell">
										<div class="rating">
				                       @for($i=1; $i<=$rating->starnum; $i++)
				                      <i class="fa fa-star checked"></i>
				                      @endfor

				                       @for($j=$rating->starnum+1; $j<=5; $j++)
				                      <i class="fa fa-star"></i>
				                      @endfor
				                    </div>
									</td>
									<td class="cell"></td>
									

								</tr>

								@endforeach
							</tbody>
						</table>
                  <div style="margin-top:50px; display: flex;justify-content: center;">{{ $ratings->links() }}</div>
					
			</div>
		</div>
	</div>
      

@include('includes.tableJs')

		@stop


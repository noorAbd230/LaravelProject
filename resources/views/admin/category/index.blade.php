
@extends('layouts.app')

@section('page-name')
	   <a class="h5 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="{{ url('category/index') }}">Categories</a>
	   <button class="btn" onclick="window.location.href ='{{ url('category/create') }}'"><i class="fa fa-plus"></i> Add Category</button>
	   @stop
@section('content')

	   @include('includes.tableStyle')

	   

	   	
		<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				


				<table class="table">

							<div class="row header">
								
								<div class="cell">#ID</div>
								<div class="cell">Image</div>
								<div class="cell">Name</div>
								<div class="cell"></div>
								<div class="cell"></div>
								<div class="cell"></div>
								
								
								
								
								
							</div>
							<tbody>
								@foreach($categories as $category)

								<tr class="row">
									<td class="cell">{{ $category->id }}</td>
									<td class="cell"><img height="50" width="50" src="{{ asset('storage/'.$category->img) }}"></td>

									<td class="cell">{{ $category->name }}</td>
									<td class="cell"><a href="{{ url('category/' . $category->id) }}">Edit</a></td>
									<td class="cell">
										<form action="{{ url('category/delete/'. $category->id) }}" method="POST">
											<input type="hidden" name="_token" value="{{ csrf_token() }}">
											<div class="col-auto">
											<div style="width: 40px; height: 40px;" class="icon icon-shape bg-danger text-white rounded-circle shadow">
											<button type="submit" class="fas fa-trash"></button>
										</div>
									</div>
										</form>
									</td>
									<td></td>
									
									

								</tr>

								@endforeach
							</tbody>
						</table>

					
			</div>
		</div>
	</div>
@include('includes.tableJs')

		@stop


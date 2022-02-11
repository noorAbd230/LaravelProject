
@extends('layouts.app')

@section('page-name')
	   <a class="h5 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="{{ url('stores/index') }}">Stores</a>
	   <button class="btn" onclick="window.location.href ='{{ url('stores/create') }}'"><i class="fa fa-plus"></i> Add Store</button>
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
								<div class="cell">Category</div>
								<div class="cell">Address</div>
								<div class="cell"></div>
								<div class="cell"></div>
								
								
								
								
							</div>
							<tbody>
								@foreach($stores as $store)

								<tr class="row">
									<td class="cell">{{ $store->id }}</td>
									<td class="cell"><img height="50" width="50" src="{{ asset('storage/'.$store->img) }}"></td>
									<td class="cell">{{ $store->name }}</td>
									<td class="cell">
										@php $category = $store->category @endphp
										@if(!empty($category))
								
										{{ $category->name }}
										
										@endif
										
									</td>
									<td class="cell">{{ $store->address }}</td>
									<td class="cell"><a href="{{ url('stores/' . $store->id) }}">Edit</a></td>
									<td class="cell">
										<form action="{{ url('stores/delete/'. $store->id) }}" method="POST">
											<input type="hidden" name="_token" value="{{ csrf_token() }}">
											<div class="col-auto">
											<div style="width: 40px; height: 40px;" class="icon icon-shape bg-danger text-white rounded-circle shadow">
											<button type="submit" class="fas fa-trash"></button>
										</div>
									</div>
										</form>
									</td>

								</tr>

								@endforeach
							</tbody>
						</table>

					
			</div>
		</div>
	</div>
@include('includes.tableJs')

		@stop


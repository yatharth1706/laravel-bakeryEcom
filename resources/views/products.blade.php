<!DOCTYPE html>
<html>
<link rel="stylesheet" href="{{ asset('css/include.css') }}">
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
    <script
      src="https://kit.fontawesome.com/2f55da0773.js"
      crossorigin="anonymous"
    ></script>

	<body>
        
	@extends('layouts.layout')

	@section('content')
	<div class="product-container container-fluid">
		<div class="row">
		@foreach($cakes as $item)
			<div class="col-sm-12 col-md-6 card-holder">
				<div class="card mb-3" style="width: 600px;height: auto;">
  					<div class="row no-gutters">
    					<div class="col-md-4">
      						<img style="width: 100%; height: 100%" src="{{ asset($item->img) }}" class="card-img" alt="...">
    					</div>
    					<div class="col-md-8">
      						<div class="card-body item-card">
        						<h4 class="card-title">{{ $item->title }}</h4>
        						<p class="card-text"><strong>{{ $item->cost }} </strong><span style="float: right">{{ $item->reviews}} </span></p>
        						<p class="card-text">{{ $item->summary }}</p>
        						<p class="card-text input-fields">
        							<form class="form-container" action="" method = "POST">
        								<input class="form-control" type="number" name="quantity" placeholder = "Number of items">
        								<input type="hidden" name="hidden_name" value="{{ $item->title }}">
        								<input type="hidden" name="hidden_cost" value="{{$item->cost}}">
        								<button class="btn btn-primary" name="cart">Add to Cart</button>
        							</form>
        						</p>
      						</div>
    					</div>
  					</div>
				</div>
			</div>
		@endforeach
	
	</div>
    @endsection
	</body>
</html>
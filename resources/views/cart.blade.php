<!DOCTYPE html>
<html>
	@extends('layouts.layout')

    @section('content')
	<div class="container cart-container">
		<h3>Order Details</h3>		
		<table class="table table-striped">
		  <thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Product</th>
		      <th scope="col">Price</th>
		      <th scope="col">Quantity</th>
		      <th scope="col">Total Price</th>
		      <th scope="col">Action</th>
		    </tr>
		  </thead>
		  <tbody>
            @php($total = 0)
		  	@foreach($items as $item)
		    <tr>
		    	<th scope="row">{{$loop->index + 1}}</th>
		      	<td> {{ $item->name }} </td>
			  	<td> {{ $item->cost }} </td>
				<td> {{ $item->quantity }} </td>
				<td>{{ $item->quantity*$item->cost }} </td>
				<td><a href="#"><span>Remove</span></a></td>
		    </tr>
            @php($total = $total + $item->quantity*$item->cost) 
            @endforeach
		    <tr>
		    	<td colspan="5" align="right">Total</td>
		    	<td>{{$total}}</td>
		    </tr>
            
		  </tbody>

	</table>

	<button style="float: right" type="submit" class="btn btn-primary">Place Order</button>
	</div>
    @endsection
</body>
</html>
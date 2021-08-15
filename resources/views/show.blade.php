@extends('main')
@section('content')
	
	<div class="row">
		<div class="col pt-2 pb-2">

			<h1>Product Details</h1>

			<br>
			<p><b>Product Name:</b> {{ $product->name }}</p>
			<p><b>Product Description:</b> {{ $product->description }}</p>
			<p><b>Product Price:</b> {{ $product->price }}</p>
			<p><b>Created At:</b> {{ $product->created_at }}</p>
			<p><b>Updated At:</b> {{ $product->updated_at }}</p>
			
		</div>
	</div>
@endsection
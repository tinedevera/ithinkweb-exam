@extends('main')
	@section('content')
		<div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2><b>Add Product</b></h2></div>
                    </div>
                </div>
            </div>
        </div>
		<div class="col-sm-8">
	    	<br>
			<form method="POST" action="/product" novalidate>
				@csrf

				<div class="form-group">

					<label for="product_name" class="required">Product Name:</label>

					@if ($errors->has('product_name'))
						<div class="alert alert-danger" role="alert" style="width: 50%">
							{{ $errors->get('product_name')[0] }}
						</div>
					@endif

					<input type="text" class="form-control" id="product_name"
						   name="product_name" value="{{ old('product_name') }}" required>

				</div>

				<div class="form-group">

					<label for="product_description">Product Description:</label>

					@if ($errors->has('product_description'))
						<div class="alert alert-danger" role="alert" style="width: 50%">
							{{ $errors->get('product_description')[0] }}
						</div>
					@endif

					<input type="text" class="form-control" id="product_description"
						   name="product_description" value="{{ old('product_description') }}">



				</div>

				<div class="form-group">

					<label for="product_price" class="required">Product Price:</label>

					@if ($errors->has('product_price'))
						<div class="alert alert-danger" role="alert" style="width: 50%">
							{{ $errors->get('product_price')[0] }}
						</div>
					@endif

					<input type="text" class="form-control" id="product_price"
						   name="product_price" value="{{ old('product_price') }}" required>

				</div>

	            <br>
				<div class="form-group">
						<button type="submit" class="btn btn-primary">Add</button>
				</div>
			</form>
	        <br>
		</div>
	@endsection
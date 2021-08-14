@extends('main')
@section('content')
    <div class="table-responsive">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2><b>Product Details</b></h2></div>
                        <div class="col-sm-4">
                        <a href="/add-product" class="btn btn-primary pull-right">
                            Add Product
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <table class="table table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Product Description</th>
                    <th>Product Price</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>test product</td>
                    <td>test description</td>
                    <td>test price</td>
                    <td>test created</td>
                    <td>test updated</td>
                    <td>
                        <a href="#" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
                    </td>
                </tr>       
            </tbody>
        </table>    
    </div>
@endsection         
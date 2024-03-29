@extends("products.productLayout")

@section("content")

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Product</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Product Name:</strong>
                <input type="text" name="productName" class="form-control" placeholder="ProductName" value="{{old('productName')}}">
            </div>
            @if($errors->has('productName'))
                <div class="error">{{ $errors->first('productName') }}</div>
            @endif
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Product Price:</strong>
                <input type="number" class="form-control" name="productPrice" placeholder="Product Price" value="{{old('productPrice')}}">
            </div>
            @if($errors->has('productPrice'))
                <div class="error">{{ $errors->first('productPrice') }}</div>
            @endif
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>product Producer:</strong>
                <input type="text" class="form-control" name="productProducer" placeholder="productProducer" value="{{old('productProducer')}}">
            </div>
            @if($errors->has('productProducer'))
                <div class="error">{{ $errors->first('productProducer') }}</div>
            @endif
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>product Description:</strong>
                <textarea name="productDescription" class="form-control" id="productDescription" cols="30" rows="3">{{old('productDescription')}}</textarea>
            </div>
            @if($errors->has('productDescription'))
                <div class="error">{{ $errors->first('productDescription') }}</div>
            @endif
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>


@endsection

@extends('layouts.main')
@section('content')
<div class="section-header">
    <h1>Product Form</h1>
</div>

<div class="section-body">
    <h2 class="section-title">Product Form</h2>
    @include('partials.errors')
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4>Product</h4>
                </div>
                <div class="card-body">
                    <form
                        action="@isset($product) {{route('products.update', $product->id)}} @endisset @empty($product) {{route('products.store')}} @endempty"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        @isset($product)
                        @method('PUT')
                        @endisset
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" required name="title" class="form-control"
                                value="{{isset($product) ? $product->title : ''}}">
                        </div>
                        <div class="form-group">
                            <label>Price</label>
                            <input type="text" required name="price" class="form-control"
                                value="{{isset($product) ? $product->price : ''}}">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="description" class="form-control"
                                required>{{isset($product) ? $product->description : ''}}</textarea>
                        </div>
                        @empty($product)
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" accept="image/*" name="image[]" multiple>
                        </div>
                        @endempty
                        <div class="text-right">
                            <input type="submit" class="btn btn-primary" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('js')
@endpush
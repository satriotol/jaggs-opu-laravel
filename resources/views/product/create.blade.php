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
                            <textarea name="description" class="form-control" id="summernote"
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
        @isset($product)
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4>Product Image</h4>
                </div>
                <div class="card-body">
                    <table id="myTable" class="display">
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($product->product_image as $image)
                            <tr>
                                <td>
                                    <img src="{{$image->image}}" class="img-fluid" style="height: 100px" alt="">
                                </td>
                                <td>
                                    <form action="{{route('productImage.destroy', $image->id)}}" method="POST"
                                        class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Are you sure?')">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4>Form Image</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('productImage.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group d-none">
                            <label>Product ID</label>
                            <input type="text" required name="product_id" class="form-control" value="{{$product->id}}">
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" accept="image/*" name="image">
                        </div>
                        <div class="text-right">
                            <input type="submit" class="btn btn-primary" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @endisset
    </div>
</div>
@endsection
@push('js')
<script>
    $(document).ready(function () {
        $('#summernote').summernote({
            toolbar: [
                ['font', ['bold', 'underline', 'clear']],
                ['para', ['ul', 'ol']],
                ['view', ['fullscreen']]
            ]
        });
    });
</script>
@endpush
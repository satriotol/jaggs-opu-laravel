@extends('layouts.main')
@section('content')
<div class="section-header">
    <h1>Product Form</h1>
</div>

<div class="section-body">
    <h2 class="section-title">Product Form</h2>
    <div class="card">
        <div class="card-header">
            <h4>Product Table</h4>
            <div class="card-header-action">
                <a href="{{route('products.create')}}" class="badge badge-primary">Create</a>
            </div>
        </div>
        <div class="card-body">
            <table id="myTable" class="display">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <td>{{$product->title}}</td>
                        <td>{!!$product->description!!}</td>
                        <td>{{$product->price}}</td>
                        <td>
                            <a href="{{route('products.edit', $product->id)}}" class="btn btn-warning">
                                Edit
                            </a>
                            <form action="{{route('products.destroy', $product->id)}}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">
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
@endsection
@extends('layouts.main')
@section('content')
<div class="section-header">
    <h1>Location Form</h1>

</div>

<div class="section-body">
    <h2 class="section-title">Location Form</h2>
    @include('partials.errors')
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4>Location</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('location.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" class="form-control" name="address" value="{{$location->address}}"
                                required>
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" accept="image/*" name="image" class="form-control">
                        </div>
                        <img src="{{$location->image}}" class="img-fluid" style="height: 100px" alt="">
                        <div class="text-right">
                            <input type="submit" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layouts.main')
@section('content')
<div class="section-header">
    <h1>Facility Form</h1>
</div>

<div class="section-body">
    <h2 class="section-title">Facility Form</h2>
    @include('partials.errors')
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4>Facility</h4>
                </div>
                <div class="card-body">
                    <form
                        action="@isset($facility) {{route('facility.update', $facility->id)}} @endisset @empty($facility) {{route('facility.store')}} @endempty"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        @isset($facility)
                        @method('PUT')
                        @endisset
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" value="{{$facility->title}}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="image" class="form-control" accept="image/*">
                        </div>
                        @isset($facility)
                        <img src="{{$facility->image}}" style="height: 100px" alt="">
                        @endisset
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
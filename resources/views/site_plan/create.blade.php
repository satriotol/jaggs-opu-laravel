@extends('layouts.main')
@section('content')
<div class="section-header">
    <h1>Site Plan Form</h1>
</div>

<div class="section-body">
    <h2 class="section-title">Site Plan Form</h2>
    @include('partials.errors')
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4>Site Plan</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('site_plan.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="image" class="form-control" accept="image/*">
                        </div>
                        @isset($site_plan)
                        <img src="{{$site_plan->image}}" style="height: 100px" alt="">
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
@extends('layouts.main')
@section('content')
<div class="section-header">
    <h1>Benefit Form</h1>
</div>

<div class="section-body">
    <h2 class="section-title">Benefit Form</h2>
    @include('partials.errors')
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4>Benefit</h4>
                </div>
                <div class="card-body">
                    <form
                        action="@isset($benefit) {{route('benefits.update', $benefit->id)}} @endisset @empty($benefit) {{route('benefits.store')}} @endempty"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        @isset($benefit)
                        @method('PUT')
                        @endisset
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" required name="title" class="form-control"
                                value="{{isset($benefit) ? $benefit->title : ''}}">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="description" class="form-control"
                                required>{{isset($benefit) ? $benefit->description : ''}}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="image" class="form-control" accept="image/*">
                        </div>
                        @isset($benefit)
                        <img src="{{$benefit->image}}" style="height: 100px" alt="">
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
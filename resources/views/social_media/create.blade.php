@extends('layouts.main')
@section('content')
<div class="section-header">
    <h1>Social Media Form</h1>
</div>

<div class="section-body">
    <h2 class="section-title">Social Media Form</h2>
    @include('partials.errors')
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4>Social Media</h4>
                </div>
                <div class="card-body">
                    <form
                        action="@isset($social_media) {{route('social_media.update', $social_media->id)}} @endisset @empty($social_media) {{route('social_media.store')}} @endempty"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        @isset($social_media)
                        @method('PUT')
                        @endisset
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" required name="name" class="form-control"
                                value="{{isset($social_media) ? $social_media->name : ''}}">
                        </div>
                        <div class="form-group">
                            <label>Link</label>
                            <input type="text" required name="link" class="form-control"
                                value="{{isset($social_media) ? $social_media->link : ''}}">
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="image" class="form-control" accept="image/*">
                        </div>
                        @isset($social_media)
                        <img src="{{$social_media->image}}" style="height: 100px" alt="">
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
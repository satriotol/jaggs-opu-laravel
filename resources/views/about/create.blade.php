@extends('layouts.main')
@section('content')
<div class="section-header">
    <h1>About Form</h1>

</div>

<div class="section-body">
    <h2 class="section-title">About Form</h2>
    @include('partials.errors')
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4>About</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('abouts.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="description" class="form-control"
                                required>{{$about->description}}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Link</label>
                            <input type="text" class="form-control" name="link" value="{{$about->link}}" required>
                        </div>
                        <div class="form-group">
                            <label>Vision</label>
                            <input type="text" class="form-control" name="vision" value="{{$about->vision}}" required>
                        </div>
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
@extends('layouts.main')
@section('content')
<div class="section-header">
    <h1>Contact Form</h1>

</div>

<div class="section-body">
    <h2 class="section-title">Contact Form</h2>
    @include('partials.errors')
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4>Contact</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('contact.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" class="form-control" name="address" value="{{$contact->address}}"
                                required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" name="email" value="{{$contact->email}}" required>
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
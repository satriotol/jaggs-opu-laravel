@extends('layouts.main')
@section('content')
<div class="section-header">
    <h1>Whatsapp Form</h1>

</div>

<div class="section-body">
    <h2 class="section-title">Whatsapp Form</h2>
    @include('partials.errors')
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4>Whatsapp</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('whatsapp.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="text" class="form-control" name="phone_number"
                                value="{{$whatsapp->phone_number}}" required>
                        </div>
                        <div class="form-group">
                            <label>Message</label>
                            <textarea name="message" class="form-control" required>{{$whatsapp->message}}</textarea>
                        </div>
                        <div class="text-right">
                            <a href="{{$whatsapp->link}}" class="btn btn-success mr-1" target="_blank">Test Link</a>
                            <input type="submit" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
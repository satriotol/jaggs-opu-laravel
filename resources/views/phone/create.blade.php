@extends('layouts.main')
@section('content')
<div class="section-header">
    <h1>Phone Number Form</h1>
</div>

<div class="section-body">
    <h2 class="section-title">Phone Number Form</h2>
    @include('partials.errors')
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4>Phone Number</h4>
                </div>
                <div class="card-body">
                    <form
                        action="@isset($phone) {{route('phone.update', $phone->id)}} @endisset @empty($phone) {{route('phone.store')}} @endempty"
                        method="POST">
                        @csrf
                        @isset($phone)
                        @method('PUT')
                        @endisset
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" required name="phone_number" class="form-control"
                                value="{{isset($phone) ? $phone->phone_number : ''}}">
                        </div>
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
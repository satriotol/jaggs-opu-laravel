@extends('layouts.main')
@section('content')
<div class="section-header">
    <h1>Phone Number Form</h1>
</div>

<div class="section-body">
    <h2 class="section-title">Phone Number Form</h2>
    <div class="card">
        <div class="card-header">
            <h4>Phone Number Table</h4>
            <div class="card-header-action">
                <a href="{{route('phone.create')}}" class="badge badge-primary">Create</a>
            </div>
        </div>
        <div class="card-body">
            <table id="myTable" class="display">
                <thead>
                    <tr>
                        <th>Phone Number</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($phones as $phone)
                    <tr>
                        <td>{{$phone->phone_number}}</td>
                        <td>
                            <a href="{{route('phone.edit', $phone->id)}}" class="btn btn-warning">
                                Edit
                            </a>
                            <form action="{{route('phone.destroy', $phone->id)}}" method="POST" class="d-inline">
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
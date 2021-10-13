@extends('layouts.main')
@section('content')
<div class="section-header">
    <h1>Facility Form</h1>
</div>

<div class="section-body">
    <h2 class="section-title">Facility Form</h2>
    <div class="card">
        <div class="card-header">
            <h4>Facility Table</h4>
            <div class="card-header-action">
                <a href="{{route('facility.create')}}" class="badge badge-primary">Create</a>
            </div>
        </div>
        <div class="card-body">
            <table id="myTable" class="display">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($facilities as $facility)
                    <tr>
                        <td>{{$facility->title}}</td>
                        <td><img src="{{$facility->image}}" class="img-fluid" style="height: 100px" alt=""></td>
                        <td>
                            <a href="{{route('facility.edit', $facility->id)}}" class="btn btn-warning">
                                Edit
                            </a>
                            <form action="{{route('facility.destroy', $facility->id)}}" method="POST" class="d-inline">
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
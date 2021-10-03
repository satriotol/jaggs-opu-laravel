@extends('layouts.main')
@section('content')
<div class="section-header">
    <h1>Benefit Form</h1>
</div>

<div class="section-body">
    <h2 class="section-title">Benefit Form</h2>
    <div class="card">
        <div class="card-header">
            <h4>Benefit Table</h4>
            <div class="card-header-action">
                <a href="{{route('benefits.create')}}" class="badge badge-primary">Create</a>
            </div>
        </div>
        <div class="card-body">
            <table id="myTable" class="display">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($benefits as $benefit)
                    <tr>
                        <td>{{$benefit->title}}</td>
                        <td>{{$benefit->description}}</td>
                        <td><img src="{{$benefit->image}}" class="img-fluid" style="height: 100px" alt=""></td>
                        <td>
                            <a href="{{route('benefits.edit', $benefit->id)}}" class="btn btn-warning">
                                Edit
                            </a>
                            <form action="{{route('benefits.destroy', $benefit->id)}}" method="POST" class="d-inline">
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
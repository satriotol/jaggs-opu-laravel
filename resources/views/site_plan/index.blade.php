@extends('layouts.main')
@section('content')
<div class="section-header">
    <h1>Site Plan Form</h1>
</div>

<div class="section-body">
    <h2 class="section-title">Site Plan Form</h2>
    <div class="card">
        <div class="card-header">
            <h4>Site Plan Table</h4>
            <div class="card-header-action">
                <a href="{{route('site_plan.create')}}" class="badge badge-primary">Create</a>
            </div>
        </div>
        <div class="card-body">
            <table id="myTable" class="display">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($site_plans as $site_plan)
                    <tr>
                        <td><img src="{{$site_plan->image}}" class="img-fluid" style="height: 100px" alt=""></td>
                        <td>
                            <a href="{{route('site_plan.edit', $site_plan->id)}}" class="btn btn-warning">
                                Edit
                            </a>
                            <form action="{{route('site_plan.destroy', $site_plan->id)}}" method="POST"
                                class="d-inline">
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
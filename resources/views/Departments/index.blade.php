
@extends('layouts.app')
@section('content')
<h3>List of Departments</h3>
<table class="table align-middle table-bordered">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Full Name</th>
            <th scope="col">Short Name</th>
            <th scope="col">College</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($departments as $department)
            <tr>
                <th scope="row">{{$department->deptid}}</th>
                <td>{{$department->deptfullname}}</td>
                <td>{{$department->deptshortname}}</td>
                <td>{{$department->college->collfullname}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
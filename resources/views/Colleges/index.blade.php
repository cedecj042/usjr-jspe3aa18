
@extends('layouts.app')
@section('content')
<h3>List of Colleges</h3>
<table class="table align-middle table-bordered">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Full Name</th>
            <th scope="col">Short Name</th>
            <th scope="col">Programs</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($colleges as $college)
            <tr>
                <th scope="row">{{$college->collid}}</th>
                <td>{{$college->collfullname}}</td>
                <td>{{$college->collshortname}}</td>
                <td>
                    <ul class="list-group list-group-flush">
                        @foreach ($college->program as $program)
                            <li class="list-group-item">{{ $program->progfullname }}</li>
                        @endforeach
                    </ul>
                </td>
                <td><a href="/show/college/{{$college->collid}}" class="btn btn-primary">Expand</a></td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
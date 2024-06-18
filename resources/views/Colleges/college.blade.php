@extends('layouts.app')
@section('content')
<div>
    <!-- No surplus words or unnecessary actions. - Marcus Aurelius -->
    <br>
    <label>Welcome to</label>
    <h3>{{$college->collfullname}}</h3>
    <p>College ID:{{$college->collid}}</p>
    <p>College Short Name:{{$college->collshortname}}</p>
    <hr>
    <p>Programs:</p>
    <ul>
        @foreach ($programs as $program)
            <li>{{$program->progfullname }}</li>
        @endforeach
    </ul>
    <hr>
    <p>Departments:</p>
    <ul>
        @foreach ($departments as $department) 
            <li>{{ $department->deptfullname }}</li>
        @endforeach
    </ul>
</div>
@endsection

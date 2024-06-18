@extends('layouts.app')
@section('content')
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Year</th>
            <th scope="col">Program</th>
            <th scope="col">College</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($students as $student)
            <tr>
                <th scope="row">{{$student->studid}}</th>
                <td>{{$student->studfirstname}}</td>
                <td>{{$student->studlastname}}</td>
                <td>{{$student->studyear}}</td>
                <td>{{$student->studprogid}}</td>
                <td>{{$student->studcollid}}</td>
                <td><a href="/show/student/{{$student->studid}}" class="btn btn-primary">Expand</a></td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
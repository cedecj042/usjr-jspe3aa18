@extends('layouts.app')
@section('content')
<div class="p-3">
    <!-- The whole future lies in uncertainty: live immediately. - Seneca -->
    <h5>Student Details</h5>
    <hr>
    <p>ID: {{$student->studid}}</p>
    <p>First Name: {{$student->studfirstname}}</p>
    <p>Mid Name: {{$student->studmidname}}</p>
    <p>Last Name: {{$student->studlastname}}</p>
    <p>Program: {{$student->studprogid}}</p>
    <p>College: {{$student->college->collfullname}}</p>
</div>
@endsection
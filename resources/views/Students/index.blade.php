<div>
    <!-- The whole future lies in uncertainty: live immediately. - Seneca -->
    @foreach ($students as $student)
    <p>This is student id: {{ $student->studid }}</p>
    <p>name: {{ $student->studfirstname }}</p>
    <a href="/show/student/{{$student->studid}}">Show Student</a>
    <hr>
    @endforeach
</div>

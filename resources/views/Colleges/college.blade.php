<div>
    <!-- No surplus words or unnecessary actions. - Marcus Aurelius -->
    <br>
    <label>Welcome to</label>
    <h3>{{$college->collfullname}}</h3>
    <p>Programs:</p>
    <ul>
        @foreach ($programs as $program) <!-- Corrected line -->
            <li>{{ $program->progfullname }}</li>
        @endforeach
    </ul>
    <hr>
    <p>Departments:</p>
    <ul>
        @foreach ($departments as $department) <!-- Corrected line -->
            <li>{{ $department->deptfullname }}</li>
        @endforeach
    </ul>
</div>

<div>
    <!-- Act only according to that maxim whereby you can, at the same time, will that it should become a universal law. - Immanuel Kant -->
    @foreach ($colleges as $college)
    <p>This is college id: {{ $college->collid }}</p>
    <p>Name: {{ $college->collfullname }}</p>
    <p>Programs:</p>
    <ul>
        @foreach ($college->program as $program) <!-- Corrected line -->
            <li>{{ $program->progfullname }}</li>
        @endforeach
    </ul>
    <a href="/show/college/{{ $college->collid }}">Show College</a>
    <hr>
    @endforeach
</div>

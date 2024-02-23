
<h1>All Flights</h1>

@foreach($flights as $flight)
    <p>{{ $flight->Planes }} - {{ $flight->Destination }}</p>
@endforeach

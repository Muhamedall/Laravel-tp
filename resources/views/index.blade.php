

<h1>All Names of Airports</h1>

@foreach($airports as $airport)
<hr>
<p> Iata : {{ $airport->iata }}
    || Icao : {{ $airport->icao }}
    || Date creat : {{ $airport->created_at }}
    || Date update : {{ $airport->update_at }}
    || Lebelle : {{ $airport->libelle }}</p>
<hr>

@endforeach

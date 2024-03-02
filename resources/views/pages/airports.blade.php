
@extends('avions.layoute')
@section('content')
<h1>All Names of Airports</h1>





<table class="table">
    <tr>
        <th> Iata </th>
        <th> Icao</th>
        <th>Date creat</th>
        <th>Date update</th>
        <th>Lebelle </th>
        </tr>
   
        @foreach ($airports as $airport)
        <tr>
        <td> {{$airport->iata }}</td>
        <td>{{$airport->icao }}</td>
        <td>{{$airport->created_at}}</td>
        <td>{{$airport->updated_at}}</td>
        <td>{{$airport->libelle}}</td>


    </tr>
        @endforeach

 </table>

    
@endsection

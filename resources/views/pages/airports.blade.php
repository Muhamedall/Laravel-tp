
@extends('avions.layoute')
@section('content')
<h1>All Names of Airports</h1>





<table class="table">
    <tr>
        <th> Id </th>
        <th> Iata </th>
        <th> Icao</th>
        <th>Date creat</th>
        <th>Date update</th>
        <th>Lebelle </th>
        <th>Actions</th>
        </tr>
   
        @foreach ($airports as $airport)
        <tr>
        <td> {{$airport->id}}</td>
        <td> {{$airport->iata }}</td>
        <td>{{$airport->icao }}</td>
        <td>{{$airport->created_at}}</td>
        <td>{{$airport->updated_at}}</td>
        <td>{{$airport->libelle}}</td>
        <td><a
           
            class="btn btn-primary"
            href="{{ route('airports.show',$airport->id)}}"
            role="button"
            >Detaile</a
        >
        </td>


    </tr>
        @endforeach


 </table>
 {{$airports->links()}}
    
@endsection

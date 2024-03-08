@extends('avions.layoute')
@section('content')
<h1>All Voles</h1>





<table class="table">
    <tr>
        <th> Id </th>
        <th> date_depart </th>
        <th>date_arrivee</th>
        <th>Date creat</th>
        <th>Date update</th>
        
        </tr>
   
        @foreach ($voles as $vol)
        <tr>
        <td> {{$vol->id}}</td>
        <td> {{$vol->date_depart}}</td>
        <td>{{$vol->date_arrivee}}</td>
        <td>{{$vol->created_at}}</td>
        <td>{{$vol->updated_at}}</td>
        
        


    </tr>
        @endforeach


 </table>
 {{$voles->links()}}
    
@endsection

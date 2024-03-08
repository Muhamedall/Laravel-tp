@extends('avions.layoute')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Deataille for Airport :  <span class="text-primary"> {{$volles->id}}</span></h1>
    <h1> Airport date depart:  {{$volles->date_depart}}</h1><br>
    <h1> Airport date arivie:  {{$volles->date_arrivee}}</h1>
</body>
</html>
@endsection

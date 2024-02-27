@extends('layouts.app')

@section('content')

<h1>All Airports</h1>

@foreach($airports as $airport)
    <p>{{ $airport->iata }} </p>
    <p> {{ $airport->icao }}</p>
@endforeach

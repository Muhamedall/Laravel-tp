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
  
        <div class="row">
          @foreach($avions as $item)
          <x-avions-cards :item="$item"/>
          @endforeach
        </div>
         
          
        
      <a href="{{route('formulair.index')}}" class="text-slate-300 hover:text-white px-3 py-2 rounded-md">Form</a>
</body>
</html>

@endsection


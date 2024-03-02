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
    <table class="border-collapse border border-slate-400 ...">
        <thead>
          <tr>
            <th class="border border-slate-900 ...">Id </th>
            <th class="border border-slate-300 ...">libelle</th>
            
            <th class="border border-slate-300 ...">capacite</th>
           
            <th class="border border-slate-300 ..."> created_at</th>
            <th class="border border-slate-300 ..."> Actions</th>
           
          </tr>
        </thead>
        <tbody>
          @foreach($avions as $item)
              <tr>
            <td class="border border-slate-900...">{{$item->id}} </td>
            <td class="border border-slate-300 ...">{{$item->libelle}}</td>
            <td class="border border-slate-300 ...">{{$item->capacite}}</td>
            
            <td class="border border-slate-300 ...">{{$item->created_at}} </td>
            
            
            <td class="border border-slate-300 bg-red-200...">
            <form action="{{ route('avions.delete', ['id' => $item->id]) }}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button  class="btn btn-danger" type="submit" onclick="return   confirm('Are you sure you want to delete this avion?' )" >Delete</button>
                      </form>
      
            </td>
          </tr>
         
          
          @endforeach
          
        </tbody>
      </table>
      <a href="{{route('formulair.index')}}" class="text-slate-300 hover:text-white px-3 py-2 rounded-md">Form</a>
</body>
</html>
@endsection

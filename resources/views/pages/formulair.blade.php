@extends('avions.layoute');
@section('content')
<h1 class="text-center">Ajoute avion</h1>
<form  method="POST" action="/insertAvion">
    @csrf
    <div class=" ">
    <label class=" ">Name</label>
    <div class="  ">
      <input type="text"  class=" "  name="libelle"  >
    </div>
  </div>
  <div class="row">
    <label class="">capacite</label>
    <div class="">
      <input type="text" class=""  name="capacite">
    </div>
  </div>

  <button type="submit" class="mt-5 btn btn-success">Ajouter</button>
</form>
    
@endsection
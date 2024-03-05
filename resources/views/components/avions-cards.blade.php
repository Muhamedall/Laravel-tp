<div class="col-sm-4">
  
<div class="card " style="width:18rem; ">
  <img src="https://c2.lestechnophiles.com/www.numerama.com/content/uploads/2017/06/boeing-avion.jpg?resize=100" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$item->libelle}}</h5>
    <h6 class="card-subtitle mb-2 text-muted ">Capacite  :{{$item->capacite}}</h6>
    <form action="{{ route('avions.delete', ['id' => $item->id]) }}" method="POST">
      @csrf
      @method('DELETE')
      <button  class="btn btn-danger" type="submit" onclick="return   confirm('Are you sure you want to delete this avion?' )" >Delete</button>
  </form>
  </div>
</div>


</div>
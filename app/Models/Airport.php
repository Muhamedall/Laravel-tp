<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Airport extends Model
{
    use HasFactory;

    protected $fillable = [
        'iata' , 'icao','libelle'
    ];
    public function volsDepart()
    {
        return $this->hasMAny(Vol::class,'airport_depart_id');
    }
   
   

}

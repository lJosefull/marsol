<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destinations extends Model
{
    protected $table = 'destinations';
  protected $fillable = ['T_salida','T_entrada','route_id','id'];


  public function Route(){
  	return $this->belongsTo('App\Route');

  }
}

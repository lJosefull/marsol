<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipios extends Model
{
    protected $table = 'municipios';
  protected $fillable = ['id_municipio','municipio','estado','departamento_id'];

public function Destinations(){
  	return $this->hasMany('App\Destinations');

  }
  public function Route(){
  	return $this->hasMany('App\Route');

  }

  
}

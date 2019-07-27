<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    
    protected $table = 'routes';
  protected $fillable = ['R_primary','R_secondary','banner_img','id','slug'];

public function Destinations(){
  	return $this->hasMany('App\Destinations');

  }

    public function Municipios(){
  	return $this->belongsTo('App\Municipios');

  }


}

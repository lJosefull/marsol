<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner_home extends Model
{
    protected $table = 'banner_homes';
  protected $fillable = ['id','img','text'];
}

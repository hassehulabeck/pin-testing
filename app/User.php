<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class User extends Model
{
  protected $primaryKey = "id";
  public $timestamps = false;
  protected $fillable = [
    'firstName', 'lastName', 'streetAdress',
    'zipcode', 'city', 'pin'
  ];
   /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
    'remember_token',
  ];
}

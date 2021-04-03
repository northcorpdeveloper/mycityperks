<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Withdraw extends Model
{
  protected $table = 'tbl_withdraws';
  public $timestamps = false;

  /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
  protected $fillable = ['amount','transactionid','datenew','type','user_id','account','created_at','updated_at'];
     
  

}



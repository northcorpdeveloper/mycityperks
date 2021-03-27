<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $table = 'products';
  public $timestamps = false;

  /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
  protected $fillable = ['id','product_category','image','price','description','status','user_id','type','sub_type','is_deleted','sub_date'];
     
  

}

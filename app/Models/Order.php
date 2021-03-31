<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
  protected $table = 'tbl_orders';
  public $timestamps = false;

  /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
  protected $fillable = ['id','prod_id','amount','transaction_id','datenew','end_date','type','	user_id','transactions_type','status','vendor_id','reason'];
     
  

}

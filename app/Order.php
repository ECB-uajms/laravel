<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table ='orders';
    protected $fillable =['subtotal', 'shipping','user_id'];
}

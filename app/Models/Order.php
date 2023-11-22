<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; 
class Order extends Model
{
    use SoftDeletes;
    protected $table = 'orders';
    protected $fillable = ['product_id', 'client_id', 'dateBuy'];

    public function product()
    {
        return $this->belongsTo('App\Models\Product', 'product_id');
    }

    public function client()
    {
        return $this->belongsTo('App\Models\Client', 'client_id');
    }
    
}



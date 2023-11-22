<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; 

class Client extends Model
{
    use SoftDeletes; 

    protected $table = 'clients';
    protected $fillable = ['lastName', 'firstName', 'email'];

    public function orders()
    {
        return $this->hasMany('App\Models\Order', 'client_id');
    }
}



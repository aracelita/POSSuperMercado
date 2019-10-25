<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model {

	public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }

}

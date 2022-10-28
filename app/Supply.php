<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supply extends Model
{
    public function supplier()
    {
        return $this->hasOne('App\Supplier', 'id', 'supplier_id');
    }
    public function product()
    {
        return $this->hasOne('App\Product', 'id', 'product_id');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    public function supplies()
    {
        return $this->hasMany(Supply::class, "supplier_id", "id");
    }
}

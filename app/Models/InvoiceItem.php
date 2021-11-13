<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InvoiceItem extends Model
{
    public function Category() {
    	return $this->belongsTo("App\Category");
    }
}

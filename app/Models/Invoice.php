<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \App\Models\Client;

class Invoice extends Model
{
    public function Client() {
    	return $this->belongsTo("App\Client", "client_id");
    }
    public function LineItems() {
    	return $this->hasMany("App\InvoiceItem", "invoice_id");
    }
    public function Payments() {
    	return $this->hasMany("App\Payment", "invoice_id");
    }
}

<?php

namespace App\Models;
use DB;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public function Invoices() {
    	return $this->hasMany("App\Invoice");
    }
    public function Projects() {
    	return $this->hasMany("App\Project");
    }
    public function Timesheets() {
    	return $this->hasMany("App\Timesheet");
    }
    public function Payments() {
    	return DB::table("invoices")->where("invoices.client_id", "=", $this->id)->join('payments', 'payments.invoice_id', '=', 'invoices.id')->get();
    }
}

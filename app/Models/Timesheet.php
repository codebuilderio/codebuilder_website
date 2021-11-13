<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Timesheet extends Model
{
    protected $table = "time_entries";

    public function Invoice() {
    	return $this->belongsTo("App\Invoice");
    }
    public function User() {
    	return $this->belongsTo("App\User");
    }
    public function Client() {
    	return $this->belongsTo("App\Client");
    }
}

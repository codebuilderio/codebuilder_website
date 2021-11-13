<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BitcoinAddress extends Model
{
    protected $table = 'bitcoin_addresses';
    protected $fillable = ['private_key_wif', 'private_key_hex', 'public_key_hex',
                           'public_key_hash', 'public_key_address', 'user_id', 'received_balance', 'last_checked', 'invoice_id'];
    public $timestamps = true;

}

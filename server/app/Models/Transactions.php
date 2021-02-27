<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    use HasFactory;

    protected $table = 'transactions';
    protected $primaryKey = 'transaction_id';
    
    protected $fillable = [
        'date',
        'name_of_initiator',
        'item_name',
        'number_of_items',
        'type_of_transaction',
    ];

    public $timestamps = false;

}

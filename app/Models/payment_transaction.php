<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment_transaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'mobile_no',
        'amount',
        'payment_for',
        'payment_method',
        'paymaya_ref_no',
        'transaction_id',
    ];
}

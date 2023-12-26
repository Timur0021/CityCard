<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddMoney extends Model
{
    use HasFactory;
    protected $table = 'add_money';
    protected $guarded = false;
    protected $fillable = [
        'card_number_id',
        'amount',
        'description',
    ];
}

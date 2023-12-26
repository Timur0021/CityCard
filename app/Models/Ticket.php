<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $table = 'tickets';
    protected $guarded = false;

    public function transport()
    {
        return $this->belongsTo(Transport::class, 'transport_id', 'id');
    }

    public function city()
    {
        return $this->belongsTo(City::class, 'city_id', 'id');
    }

    public function type()
    {
        return $this->belongsTo(TypeTiket::class, 'type_id', 'id');
    }
}

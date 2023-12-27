<?php

namespace App\Models;

use App\Filters\Controllers\CitySearchController;;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class City extends Model
{
    use HasFactory;
    protected $table = 'cities';
    protected $guarded = false;
}

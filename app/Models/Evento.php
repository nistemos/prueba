<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Evento extends Model
{
    use HasFactory;

    // Entity functions event, create, read, update and delete
    public function __construct() {

    }


    protected static function boot()
    {
        /*parent::boot();
        static::creating(function ($evento) {
            $evento->user_id = auth()->id();
        });*/
    }



    protected $fillable = [
        'objeto',
        'activity',
        'address',
        'description',
        'badge',
        'budget',
        'start_date',
        'end_date',
        'start_time',
        'end_time',
    ];
}

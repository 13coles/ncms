<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $table = 'events';
    protected $fillable = [
        'name',
        'venue',
        'address',
        'telephone',
        'email',
        'start_date',
        'end_date',
        'start_time',
        'end_time',
    ];
}

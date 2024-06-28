<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecialProgram extends Model
{
    use HasFactory;
    protected $table = 'special_programs';
    protected $fillable = [
        'program_name',
        'description',
        'program_image',
    ];
}

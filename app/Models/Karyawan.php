<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;
    protected $guarded = 'id';
    protected $fillable = [
        'name',
        'place_of_birth',
        'date_of_birth',
        'gender', 
        'address',
        'division',
        'position'
    ];
    
}

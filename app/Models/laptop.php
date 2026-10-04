<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laptop extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand_name',
        'serial_number',
        'condition',
        'status',
        'borrow_date', // <--- Pastikan baris ini ada!
    ];
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'barcode',
        'description',
        'manufacturer',
        'category',
        'image',
        'value',
        'room',
    ];

    protected $table = 'products';
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use League\CommonMark\Extension\DescriptionList\Node\Description;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $fillable = ['name', 'price', 'description'];
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use League\CommonMark\Extension\DescriptionList\Node\Description;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    public $timestamps = false;
    
    protected $fillable = ['name', 'price', 'description'];
}
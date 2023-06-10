<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use League\CommonMark\Extension\DescriptionList\Node\Description;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customers';

    public $timestamps = false;

    protected $fillable = ['name', 'address', 'no_hp'];
}

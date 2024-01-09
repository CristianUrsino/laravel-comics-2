<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    use HasFactory;

    // quelli da escudere, token sottinteso 
    // protected $guarded = [];

    protected $fillable = ['title', 'price', 'sale_date', 'series', 'type'];
}

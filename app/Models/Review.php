<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    //
    protected $fillable = [
        "customer_name",
        "title",
        "rate",
        "desc",
        "customer_image",
    ];
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Questionair extends Model
{
    protected $fillable = [
        "name",
        "phone_number",
        "country",
        "trademark_name",
        "trademark_type",
        "notes"
    ];
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invest extends Model
{
    /** @use HasFactory<\Database\Factories\InvestFactory> */
    use HasFactory;
    protected $fillable = [
        "name",
        "phone_number",
        "company_name",
        "company_type",
        "country",
        "message"
    ];
}
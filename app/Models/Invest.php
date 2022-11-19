<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invest extends Model
{
    use HasFactory;

    protected $table='invests';
    protected $fillable=[
        'package_name',
        'price_range',
        'monthly_invest',
        'invest_period'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer_say extends Model
{
    use HasFactory;

    protected $table="customer_says";
    protected $guarded=[];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
    use HasFactory;
    // protected $fillable = ['saldo_id', 'balanceBefore', 'balanceAfter', 'location'];
    protected $guarded = [];
}
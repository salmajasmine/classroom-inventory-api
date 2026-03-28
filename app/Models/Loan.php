<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    protected $fillable = [
    'name',
    'nim',
    'classroom',
    'borrow_time',
    'return_time',
    'status'
    ];
}

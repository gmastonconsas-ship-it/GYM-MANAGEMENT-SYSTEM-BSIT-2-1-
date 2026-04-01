<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    // Ang $fillable ay para sa database columns lang
    protected $fillable = [
        'name',
        'email',
        'phone',
        'plan_type',
        'payment_status',
    ];
}
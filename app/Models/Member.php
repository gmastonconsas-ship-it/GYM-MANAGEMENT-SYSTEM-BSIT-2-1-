<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    // Ito ay para siguradong alam ng Laravel kung anong columns ang pwede nating gamitin
    protected $fillable = ['name', 'email', 'phone', 'membership_start', 'membership_end'];
}
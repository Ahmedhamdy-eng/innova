<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pharmacovigilance extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject_ar',
        'subject_en',
        'description_ar',
        'description_en',
        'email',
        'phone',
    ];

}

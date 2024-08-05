<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class CompanyStrategy extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $table = "company_strategies";
    protected $fillable = [
        'name',
        'description',
        'sort',
    ];
}

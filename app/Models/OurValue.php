<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class OurValue extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $table = "our_values";

    protected $fillable = [
        'name',
        'description',
        'sort',
    ];
}

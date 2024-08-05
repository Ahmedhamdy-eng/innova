<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Career extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $table = "careers";

    protected $fillable = [
        "name",
        "email",
        "phone",
        "address",
        "state",
        "city",
        "job_vacancy",
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Product extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    const MEMBER_OF_PUBLIC = 'member-of-the-public';
    const HEALTHCARE_PROFESSIONAL = 'healthcare-professional';
    protected $fillable = [
        'name',
        'description',
        'public_member_description',
        'healthcare_professional_description',
        'sort',
        'category_id',
        'therapeutic_area_id',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function therapeuticArea(): BelongsTo
    {
        return $this->belongsTo(TherapeuticArea::class, 'therapeutic_area_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Project extends Model implements HasMedia
{
    use HasFactory;
    use HasMediaTrait;

    protected $fillable = [
        'title',
        'description',
        'start_date',
        'end_date',
        'status',
        'budget',
        'partner_id',
        'owner',
    ];

    public function partner()
    {
        return $this->belongsTo(Partner::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class)->withPivot('progress');
    }

    public function getStatus()
    {
        return $this->status;
    }

    
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('pictures');
    }
}

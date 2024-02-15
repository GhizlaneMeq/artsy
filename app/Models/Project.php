<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Project extends Model
{

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
    public function isAssigned()
    {
        return $this->users()->exists();
    }
}

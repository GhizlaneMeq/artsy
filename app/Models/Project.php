<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = ['title',
    'description',
    'start_date',
    'end_date',
    'status',
    'budget',
    'progress',
    'partner_id'
    ];

    public function partner()
    {
        return $this->belongsTo(Partner::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getProgress()
    {
        switch ($this->progress) {
            case 'pending':
                return 'Pending';
            case 'ongoing':
                return 'Ongoing';
            case 'completed':
                return 'Completed';
            default:
                return $this->progress;
        }
    }
}

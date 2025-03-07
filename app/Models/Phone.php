<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Notifications\Notifiable;

class Phone extends Model
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'number', 'phoneable_id', 'phoneable_type',
    ];
    
    /**
     * Get the parent phoneable model (user or clients).
     */
    public function phoneable(): MorphTo
    {
        return $this->morphTo();
    }
}

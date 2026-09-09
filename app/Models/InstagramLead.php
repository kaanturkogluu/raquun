<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class InstagramLead extends Model
{
    protected $fillable = [
        'username',
        'category_id',
        'profile_url',
        'follower_count',
        'sector',
        'current_website',
        'problem_opportunity',
        'outreach_status',
        'priority',
        'detailed_notes',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(InstagramCategory::class, 'category_id');
    }
}


<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InstagramLead extends Model
{
    protected $fillable = [
        'username',
        'profile_url',
        'follower_count',
        'sector',
        'current_website',
        'problem_opportunity',
        'outreach_status',
        'priority',
        'detailed_notes',
    ];
}

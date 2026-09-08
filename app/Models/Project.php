<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title',
        'category',
        'price_text',
        'client_name',
        'description',
        'tags',
        'project_url',
        'is_featured',
        'order_num',
    ];

    protected $casts = [
        'is_featured' => 'boolean',
    ];
}

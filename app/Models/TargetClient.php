<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TargetClient extends Model
{
    protected $fillable = [
        'company_name',
        'contact_person',
        'phone',
        'email',
        'sector',
        'need_type',
        'estimated_budget',
        'status',
        'notes',
    ];
}

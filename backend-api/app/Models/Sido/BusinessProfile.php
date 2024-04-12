<?php

namespace App\Models\Sido;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessProfile extends Model
{
    use HasFactory;
    use HasUuids;
    protected $fillable = [
        'applicationCode',
        'isFilled',
        'background',
        'marketProblem',
        'marketBase',
        'prototypeDescription',
        'marketSize',
    ];
}

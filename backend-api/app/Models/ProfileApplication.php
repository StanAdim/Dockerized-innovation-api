<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileApplication extends Model
{
    use HasFactory;
    use HasUuids;
    protected $fillable = [
        'applicationCode',
        'fullName',
        'birthYear',
        'nidaNumber',
        'educationLevel',
        'BusinessRegStatus',
        'phoneNumber',
        'email',
        'businessSector',
        'businessName',
        'businessLocation',
    ];
}

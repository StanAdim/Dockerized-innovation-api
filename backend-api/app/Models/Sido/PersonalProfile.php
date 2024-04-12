<?php

namespace App\Models\Sido;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalProfile extends Model
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

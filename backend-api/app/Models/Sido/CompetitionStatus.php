<?php

namespace App\Models\Sido;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompetitionStatus extends Model
{
    use HasFactory;
    use HasUuids;
    protected $fillable = [
        'competitors', //array
        'competitiveAdvantage',
        'marketStrategy',
        'teamCapacity',
        'applicationCode',
        'isFilled',
        //Attachments
    ];
}

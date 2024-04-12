<?php

namespace App\Models\Sido;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projection extends Model
{
    use HasFactory;
    use HasUuids;
    protected $fillable = [
        'expectedRevenue',
        'machineEquipment', //array
        'workingCapital',
        'investmentPlan',
        'financingSource',
        'challenges', //array
        'supportNeeded', 
        'applicationCode', 
        'isFilled',
    ];
}

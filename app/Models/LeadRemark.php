<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LeadRemark extends Model
{
    protected $fillable = [

        'lead_id',
        'user_id',
        'remark_type',
        'remark',
        'followup_date',
        'followup_time'

    ];
}
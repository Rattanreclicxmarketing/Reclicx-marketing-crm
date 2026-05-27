<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Lead extends Model
{
    protected $fillable = [

    'customer_name',
    'phone',
    'email',
    'address',
    'product',
    'amount',
    'status',
    'team_leader_id',
    'agent_id',
    'remarks',

];

    public function leadRemarks()
    {
        return $this->hasMany(LeadRemark::class);
    }

    public function teamLeader()
    {
        return $this->belongsTo(User::class, 'team_leader_id');
    }

    public function agent()
    {
        return $this->belongsTo(User::class, 'agent_id');
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserPlanItem extends Model
{
    protected $fillable = [
        'status',
        'user_id',
        'plan_item_id',
        'user_plan_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function userPlan()
    {
        return $this->belongsTo(UserPlan::class);
    }

    public function planItem()
    {
        return $this->belongsTo(PlanItem::class);
    }
}

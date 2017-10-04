<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sequence extends Model
{
    /*
     * Available attributes:
     *
     * company_id
     * job_plan_id
     * safety_instruction_id
     * details
     * added_by
     */

    use SoftDeletes;

    public function jobPlan() {
        return $this->belongsTo(JobPlan::class);
    }

    public function safetyInstruction() {
        return $this->belongsTo(SafetyInstruction::class);
    }

    public function company() {
        return $this->belongsTo(Company::class);
    }
}

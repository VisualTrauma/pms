<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SafetyInstruction extends Model
{
    /*
     * Available attributes:
     *
     * company_id
     * number
     * name
     * added_by
     */

    use SoftDeletes;

    public function company() {
        return $this->belongsTo(Company::class);
    }
}

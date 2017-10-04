<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobPlan extends Model
{
    /*
     * Available attributes:
     *
     * company_id
     * number
     * description
     * added_by
     */

    public function company() {
        return $this->belongsTo(Company::class);
    }
}

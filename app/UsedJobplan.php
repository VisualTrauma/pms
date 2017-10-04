<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsedJobplan extends Model
{
    /*
     * Available attributes:
     *
     * company_id
     */

    public function company() {
        return $this->belongsTo(Company::class);
    }
}

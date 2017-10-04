<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CostCenter extends Model
{
    /*
     * Available attributes:
     *
     * company_id
     * number
     * description
     * added_by
     */

    use SoftDeletes;

    public function accountCodes() {
        return $this->hasMany(AccountCode::class);
    }

    public function company() {
        return $this->belongsTo(Company::class);
    }
}

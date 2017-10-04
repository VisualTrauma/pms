<?php

namespace App;

use Faker\Provider\Company;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AccountCode extends Model
{
    /*
     * Available attributes:
     *
     * company_id
     * cost_center_id
     * number
     * description
     * added_by
     */

    use SoftDeletes;

    public function costCenter() {
        return $this->belongsTo(CostCenter::class);
    }

    public function company() {
        return $this->belongsTo(Company::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AccountCode extends Model
{
    /*
     * Available attributes:
     *
     * cost_center_id
     * number
     * description
     * added_by
     */

    use SoftDeletes;

    public function costCenter() {
        return $this->belongsTo(CostCenter::class);
    }
}

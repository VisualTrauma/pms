<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GrossSalesTax extends Model
{
    /*
     * Available attributes:
     *
     * company_id
     * percentage
     * added_by
     */

    use SoftDeletes;

    public function company() {
        return $this->belongsTo(Company::class);
    }
}

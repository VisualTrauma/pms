<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    /*
     * Available attributes:
     *
     * company_id
     * type
     * description
     * supplier_id
     * added_by
     */

    use SoftDeletes;

    public function supplier() {
        return $this->belongsTo(Supplier::class);
    }

    public function company() {
        return $this->belongsTo(Company::class);
    }
}

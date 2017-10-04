<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContactDetail extends Model
{
    /*
     * Available attributes:
     *
     * company_id
     * supplier_id
     * type
     * description
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

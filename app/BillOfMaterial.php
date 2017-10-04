<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BillOfMaterial extends Model
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

    public function parts() {
        return $this->hasMany(BomPart::class);
    }

    public function company() {
        return $this->belongsTo(Company::class);
    }
}

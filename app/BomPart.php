<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BomPart extends Model
{
    /*
     * Available attributes:
     *
     * company_id
     * bill_of_material_id
     * number
     * description
     * quantity
     * comment
     */

    use SoftDeletes;

    protected $table = "bom_parts";

    public function billOfMaterial() {
        return $this->hasMany(BillOfMaterial::class);
    }

    public function company() {
        return $this->belongsTo(Company::class);
    }
}

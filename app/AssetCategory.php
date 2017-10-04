<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AssetCategory extends Model
{
    /*
     * Available attributes:
     *
     * company_id
     * code
     * description
     * added_by
    */

    use SoftDeletes;

    protected $table = "asset_categories";

    public function company() {
        return $this->belongsTo(Company::class);
    }
}
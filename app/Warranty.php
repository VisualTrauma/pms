<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Warranty extends Model
{
    /*
     * Available attributes:
     *
     * company_id
     * type
     * added_by
     */

    use SoftDeletes;

    public function assets() {
        return $this->hasMany(Asset::class);
    }

    public function company() {
        return $this->belongsTo(Company::class);
    }
}

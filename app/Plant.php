<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Plant extends Model
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

    public function departments() {
        return $this->hasMany(Department::class);
    }

    public function company() {
        return $this->belongsTo(Company::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Section extends Model
{
    /*
     * Available attributes:
     *
     * company_id
     * department_id
     * code
     * description
     * added_by
    */

    use SoftDeletes;

    public function department() {
        return $this->belongsTo(Department::class);
    }

    public function company() {
        return $this->belongsTo(Company::class);
    }
}

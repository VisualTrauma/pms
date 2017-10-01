<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Plant extends Model
{
    /*
     * Available attributes:
     *
     * code
     * description
     * added_by
    */

    use SoftDeletes;

    public function departments() {
        return $this->hasMany(Department::class);
    }
}

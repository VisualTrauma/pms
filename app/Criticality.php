<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Criticality extends Model
{
    /*
     * Available attributes:
     *
     * type
     * added_by
     */

    use SoftDeletes;

    public function assets() {
        return $this->hasMany(Asset::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Location extends Model
{
    /*
     * Available attributes:
     *
     * name
     */

    use SoftDeletes;

    public function parts() {
        return $this->hasMany(Part::class);
    }
}

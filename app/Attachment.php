<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Attachment extends Model
{
    /*
     * Available attributes:
     *
     * supplier_id
     * filename
     * url
     * added_by
     */

    use SoftDeletes;

    public function supplier() {
        return $this->belongsTo(Supplier::class);
    }
}

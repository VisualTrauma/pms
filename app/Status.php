<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Status extends Model
{
    /*
     * Available attributes:
     *
     * added_by
     */

    use SoftDeletes;

    public function workRequests() {
        return $this->hasMany(WorkRequest::class);
    }

    public function workOrders() {
        return $this->hasMany(WorkOrder::class);
    }

    public function assets() {
        return $this->hasMany(Asset::class);
    }
}

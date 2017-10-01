<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Trade extends Model
{
    /*
     * Available attributes:
     *
     * type
     * added_by
     */

    use SoftDeletes;

    public function workRequests() {
        return $this->hasMany(WorkRequest::class);
    }

    public function workOrders() {
        return $this->hasMany(WorkOrder::class);
    }
}

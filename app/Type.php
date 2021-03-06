<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Type extends Model
{
    /*
     * Available attributes:
     *
     * company_id
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

    public function company() {
        return $this->belongsTo(Company::class);
    }
}

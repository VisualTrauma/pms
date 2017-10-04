<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Status extends Model
{
    /*
     * Available attributes:
     *
     * company_id
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

    public function company() {
        return $this->belongsTo(Company::class);
    }
}

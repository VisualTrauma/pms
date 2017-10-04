<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Failure extends Model
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

    public function workRequests() {
        return $this->hasMany(WorkRequest::class);
    }

    public function company() {
        return $this->belongsTo(Company::class);
    }
}
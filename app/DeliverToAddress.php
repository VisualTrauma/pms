<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DeliverToAddress extends Model
{
    /*
     * Available attributes:
     *
     * company_id
     * name
     * address
     * city
     * state
     * zip_code
     * country
     * contact_numbers
     */

    use SoftDeletes;

    public function company() {
        return $this->belongsTo(Company::class);
    }
}

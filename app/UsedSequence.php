<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsedSequence extends Model
{
    /*
     * Available attributes:
     *
     * company_id
     */

    public function company() {
        return $this->belongsTo(Company::class);
    }
}

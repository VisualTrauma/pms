<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Department extends Model
{
    /*
     * Available attributes:
     *
     * company_id
     * plant_id
     * code
     * description
     * added_by
    */

    use SoftDeletes;

    public function plant()
    {
        return $this->belongsTo(Plant::class);
    }

    public function sections()
    {
        return $this->hasMany(Section::class);
    }

    public function company() {
        return $this->belongsTo(Company::class);
    }
}

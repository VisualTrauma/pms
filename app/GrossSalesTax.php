<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GrossSalesTax extends Model
{
    /*
     * Available attributes:
     *
     * percentage
     * added_by
     */

    use SoftDeletes;
}

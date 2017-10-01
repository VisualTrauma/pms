<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SafetyInstruction extends Model
{
    /*
     * Available attributes:
     *
     * number
     * name
     * added_by
     */

    use SoftDeletes;
}

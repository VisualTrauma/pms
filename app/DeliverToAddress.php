<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DeliverToAddress extends Model
{
    /*
     * Available attributes:
     *
     * name
     * address
     * city
     * state
     * zip_code
     * country
     * contact_numbers
     */

    use SoftDeletes;
}

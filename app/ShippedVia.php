<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ShippedVia extends Model
{
    /*
     * Available attributes:
     *
     * type
     * added_by
     */

    use SoftDeletes;

    protected $table = 'shipped_via';

    public function purchaseOrders() {
        return $this->hasMany(PurchaseOrder::class);
    }
}

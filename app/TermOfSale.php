<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TermOfSale extends Model
{
    /*
     * Available attributes:
     *
     * type
     * added_by
     */

    use SoftDeletes;

    public function purchaseOrders() {
        return $this->hasMany(PurchaseOrder::class);
    }
}

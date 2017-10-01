<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Supplier extends Model
{
    /*
     * Available attributes:
     *
     * code
     * name
     * province
     * postal_code
     * country
     * contact_details (belongsTo->this) (phone_number, fax_number, address, email_address)
     * services (belongsTo->this)
     * account_number
     * status
     * added_by
     * attachments (belongsTo->this)
    */

    use SoftDeletes;

    public function attachments() {
        return $this->hasMany(Attachment::class);
    }

    public function contactDetails() {
        return $this->hasMany(ContactDetail::class);
    }
}

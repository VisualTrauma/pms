<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AssetCategory extends Model
{
    /*
     * Available attributes:
     *
     * code
     * description
     * added_by
    */

    use SoftDeletes;

    protected $table = "asset_categories";
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    //
    protected $fillable = ['name', 'categy_id', 'money','xq','is_on_sale','llq','imgs'];

}

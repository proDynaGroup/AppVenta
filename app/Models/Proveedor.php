<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;
    protected $table ="tbl_proveedor";
    public $timestamps = false;
    protected $primaryKey = "prv_id";
    protected $guarded = [];
}

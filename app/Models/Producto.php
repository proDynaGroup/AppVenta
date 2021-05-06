<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $table = "tbl_producto";
    public $timestamps = false;
    protected $primaryKey = 'pro_id';
    protected $guarded = [];
}

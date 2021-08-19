<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $guarded = [];
    use HasFactory;
    public function category() {
	    return $this->belongsTo(Category::class);
	  }
    public function ProductDetail() {
	    return $this->hasOne(ProductDetail::class);
    }
}
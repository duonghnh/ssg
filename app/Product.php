<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {
	protected $table = "product";
	public function category() {
		return $this->belongto('App\Category', 'ID', 'category');
	}
	public function product_article() {
		return $this->hasMany('App\Product_article', 'ID', 'ID_Product');
	}
}

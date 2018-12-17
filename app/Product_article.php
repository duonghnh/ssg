<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_article extends Model {
	protected $table = "product_article";
	public function product() {
		return $this->hasMany('App\Product', 'ID_Product', 'ID');
	}
	public function article() {
		return $this->hasMany('App\Article', 'ID_Article', 'ID');
	}

}

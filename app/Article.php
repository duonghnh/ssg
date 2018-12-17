<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model {
	protected $table = "article";
	public function product_article() {
		return $this->hasMany('App\Product_article', 'ID', 'ID_Article');
	}
}

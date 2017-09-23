<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $table = 'posts';

    protected $fillable = ['title', 'main_category_id', 'sub_category_id', 'short_description', 'feature_photo', 'detail_description', 'detail_photo', 'custom_field1', 'custom_field2', 'custom_field3', 'custom_field4', 'custom_field5'];

    public function Category(){
		return $this->belongsTo('App\Model\Category', 'main_category_id');
	}

	public function SubCategory(){
		return $this->belongsTo('App\Model\sub_category_id', 'main_category_id');
	}
}
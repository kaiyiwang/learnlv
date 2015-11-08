<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $table = 'posts';

	public $timestamps = false;

	protected $guarded = [];

	public function comment(){
		return $this->hasMany('App\Comment', 'post_id');
	}
      
}


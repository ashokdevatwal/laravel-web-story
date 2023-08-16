<?php

namespace Devatwal\LaravelWebStory\Models;

use Illuminate\Database\Eloquent\Model;

class WebStory extends Model {
	
	public function scopeActive($query){
		return $query->where('status',true);
	}
	
	public function slides() {
		return $this->hasMany(WebStorySlide::class,'web_story_id','id');
	}
	
}
<?php

namespace Devatwal\LaravelWebStory\Models;

use Illuminate\Database\Eloquent\Model;

class WebStorySlide extends Model {	

	public function storyname() {
		return $this->belongsTo(WebStory::class,'web_story_id','id'); 
		 
	}
	
	public function template() {
		return $this->belongsTo(WebstoryTemplete::class,'template_id','id'); 
	}
	
}
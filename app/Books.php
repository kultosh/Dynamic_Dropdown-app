<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Author;

class Books extends Model
{
    protected $table = "books";
	protected $primaryKey = 'id';
    protected $fillable = ['title','cover','price','author_id'];

    public function author(){
    	return $this->belongsTo('App\Author');
    }
}

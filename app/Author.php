<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Books;

class Author extends Model
{
    protected $table = "athur";
    protected $primaryKey = 'id';
   	protected $fillable =['name','surname'];

   	public function books(){
   		return $this -> hasMany('App\Books');
   	}
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Subcategory;

class Category extends Model
{
    protected $table = "category";
    protected $primaryKey = 'id';
   	protected $fillable =['name'];

   	public function categories(){
   		return $this -> hasMany('App\Subcategory');
   	}
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Subcategory extends Model
{
    protected $table = "subcategory";
    protected $fillable =['name','category_id'];

   	public function subcat(){
   		return $this -> belongsTo('App\Category');
   	}
}

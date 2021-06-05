<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = [
        'pimg', 'pname','pprice','cat_id'
    ];
    public function category(){
        return $this->belongsTo(Category::class,'cat_id','id');   
    }
}

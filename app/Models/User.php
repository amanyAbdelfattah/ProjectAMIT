<?php

namespace App\Models;

use App\Models\Admin\Post;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    protected $fillable = [
        'image','name','email','password','role'
    ];
    public function posts()
    {
        return $this->hasMany(Post::class, 'user_id' , 'id');
    }
}

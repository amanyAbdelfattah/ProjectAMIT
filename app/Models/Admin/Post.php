<?php

namespace App\Models\Admin;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable = [
        'postbody','user_id'
    ];
    public function user()
    {
        return $this->belongsTo(User::class , 'user_id' , 'id');
    }
}

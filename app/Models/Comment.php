<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected  $fillable =['id_post','id_user','text'];


public function users_comment(){
return $this->belongsTo(User::class,'id_user');
    
}

public function posts_comment()  {

    return $this->belongsTo(Post::class,'id_post');
}
}
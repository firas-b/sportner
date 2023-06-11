<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable=['user_id','tags','location','message'];
    use HasFactory;

    public function ScopeFilter($query, array $filter/*the tag varaibale in the request or the search input varaiable*/)
    {
        if ($filter['tag'] ?? false) {
            $query->where('tags', 'like', '%' . request('tag') . '%');
        }

      
        if($filter['search']??false){
            $query->where('user_id', 'like', '%' . User::where('name','%'.request('search').'%')->get()->id. '%')
            ->orwhere('message', 'like', '%' . request('search') . '%')
            ->orwhere('location', 'like', '%' . request('search') . '%');
        }
    }

    public function users(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function comments(){
        return $this->hasMany(Comment::class,'id_post');
    }



}


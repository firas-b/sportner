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
            $query->where('username', 'like', '%' . request('search') . '%')
            ->orwhere('message', 'like', '%' . request('search') . '%')
            ->orwhere('location', 'like', '%' . request('search') . '%');
        }
    }

    public function users(){
        return $this->belongsTo(User::class,'user_id');
    }
}


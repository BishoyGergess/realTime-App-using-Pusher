<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'title','body', 'slug','user_id','category_id'
    ];
    //protected $guarded = [];
    public function getRouteKeyName(){
        return 'slug';
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function categories()
    {
        return $this->belongsTo(Category::class);
    }
    public function replies()
    {
        return $this->hasMany(Reply::class);
    }
    public function getPathAttribute(){
        //bulit in fun
        return asset("api/question/$this->slug");
    }
}

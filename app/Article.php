<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Article extends Model
{
    protected $guarded = [];
    protected $primaryKey = 'articleID';


    // order by id descending
    public function scopeLatest($query){
        return $query->orderBy('articleID','DESC');
    }

    // article is pin
    public function scopePin($query){
        return $query->where('priority','1');
    }

    // article is not pin
    public function scopeNormal($query){
        return $query->where('priority','0');
    }

    // relationship to catgeory
    public function category(){
        return $this->belongsTo(Category::class,'categoryID');
    }

    // relation to user
    public function user(){
        return $this->belongsTo(User::class,'userID');
    }

    // modify url article
    public function url(){
        return route('view.article',[$this->articleID,Str::slug($this->title)]);
    }
    

}

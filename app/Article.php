<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $guarded = [];
    protected $primaryKey = 'articleID';


    // relationship to catgeory
    public function category(){
        return $this->belongsTo(Category::class,'categoryID');
    }

    // relation to user
    public function user(){
        return $this->belongsTo(User::class,'userID');
    }

}

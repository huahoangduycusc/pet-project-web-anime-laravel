<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrackingArticle extends Model
{
    protected $guarded = [];
    protected $primaryKey = 'trackingID';


    public function scopeMostview($query){
        return $query->orderBy('views','DESC');
    }
    public function scopeToday($query){
        return $query->whereDate('created_at','=',date("Y-m-d"));
    }

    // relation
    public function article(){
        return $this->belongsTo(Article::class,'articleID');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class TrackingArticle extends Model
{
    protected $guarded = [];
    protected $primaryKey = 'trackingID';

    /////////// scope

    // article most view in week
    public function scopeWeek($query){
        return $query->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()]);
    }

    // article most view in current month
    public function scopeMonth($query){
        return $query->whereYear('created_at',date("Y"))->whereMonth('created_at',date("m"));
    }

    public function scopeMostview($query){
        return $query->orderBy('views','DESC');
    }
    public function scopeToday($query){
        return $query->whereDate('created_at','=',date("Y-m-d"));
    }

    ////////////// relation
    public function article(){
        return $this->belongsTo(Article::class,'articleID');
    }
}

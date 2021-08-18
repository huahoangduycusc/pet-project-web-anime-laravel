<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $table = "categories";
    protected $guarded = [];
    protected $primaryKey = 'categoryID';
    
    public function scopeLatest($query){
        return $query->orderBy('categoryID','DESC');
    }

    public function getStatusAttribute($attribute){
        return $this->statusOptions()[$attribute];
    }

    public function statusOptions(){
        return [
            0 => 'Active',
            1 => 'Inactive'
        ];
    }

    public function articles(){
        return $this->hasMany(Article::class);
    }
}

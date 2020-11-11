<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clan extends Model
{
    //
    protected $guarded =[];
    
    protected $dates = ['published_at'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function juego(){
        return $this->belongsToMany(Juego::class);
    }

    public function pais(){
        return $this->belongsToMany(Pais::class);
    }
    public function photos(){
        return $this->hasMany(Photo::class);
    }
    public function scopeAllowed($query){
        if(auth()->user()->hasRole('Admin')){
            return $query;
        }
        return $query->where('user_id', auth()->id()); 
    }
}

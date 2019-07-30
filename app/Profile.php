<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    /*protected $fillable =[
        'title','url','description','image'
    ];*/
    protected $guarded=[];
    public function getImage(){
        return '/storage/'.(($this->image)?$this->image:'no-image-available.png');
    }
    public function user(){
        return $this->belongsTo(User::class);
    } 
    public function followers(){
        return $this->belongsToMany(User::class);
    }
}

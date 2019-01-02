<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    // use SoftDeletes;
    
    protected $table = 'articles';

    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id','title', 'slug', 'cover', 'place', 'description', 'categories', 'status'
    ];

    public function User(){
        return $this->belongsTo('App\User');
    }

    public function Comment(){
        return $this->hasOne('App\Comment');
    }

    // protected $dates = ['deleted_at'];
}

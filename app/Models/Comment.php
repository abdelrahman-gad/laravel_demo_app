<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';
    protected $fillable= [ 'post_id' , 'user_id' , 'comment'  , 'created_at' , 'updated_at'];
    protected $hidden = ['created_at' , 'updated_at'];
    public $timestamps = true;


    
    public function user()
    {                                    // internal.key         external.key
        return $this->belongsTo('App\User', 'user_id',           'id');
    }
}

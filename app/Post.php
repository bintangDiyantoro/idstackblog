<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; //to use soft deletes

class Post extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    
    // protected $table = 'posttables'; //if you want to choose your own table, eg. posttables
    // protected $primaryKey = 'post_id'; //if you want to create your own primary key, eg. post_id

    protected $fillable = ['title', 'body', 'user_id']; //to allow mass assigntment
}
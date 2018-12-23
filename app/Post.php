<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // protected $table = 'posttables'; //if you want to choose your own table, eg. posttables
    // protected $primaryKey = 'post_id'; //if you want to create your own primary key, eg. post_id

    protected $fillable = ['title', 'body', 'user_id']; //to allow mass assigntment
}
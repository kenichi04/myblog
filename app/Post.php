<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //カラムへのデータ挿入許可
    protected $fillable = ['title', 'body'];
}

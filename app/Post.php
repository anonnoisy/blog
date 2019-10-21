<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $guarded = [];

    protected $fillable = [
        'image', 'tag_id', 'title', 'subtitle', 'section'
    ];

    public function tag()
    {
        return $this->belongsTo('App\Tag');
    }

}

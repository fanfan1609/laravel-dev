<?php
namespace App\Models;


class PostEdit extends AppModels
{
    public function post()
    {
        return $this->belongsTo('App\Models\Post');
    }

}
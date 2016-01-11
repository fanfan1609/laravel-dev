<?php
namespace App\Models;


class Bookmark extends AppModels
{
    public function member()
    {
        return $this->belongsTo('App\Models\Member','member_id');
    }

    public function post()
    {
        return $this->belongsTo('App\Models\Post','post_id');
    }
}
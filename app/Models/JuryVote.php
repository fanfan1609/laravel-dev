<?php
namespace App\Models;


class JuryVote extends AppModels
{
    public function member()
    {
        return $this->belongsTo('App\Models\Member');
    }

    public function post()
    {
        return $this->belongsTo('App\Models\Post');
    }
}
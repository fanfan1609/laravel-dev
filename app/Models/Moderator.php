<?php
namespace App\Models;


class Moderator extends AppModels
{
    public function member()
    {
        return $this->belongsTo('App\Models\Member');
    }

    public function topic()
    {
        return $this->belongsTo('App\Models\Topic');
    }

}
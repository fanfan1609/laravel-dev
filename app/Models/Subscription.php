<?php
namespace App\Models;


class Subscription extends AppModels
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
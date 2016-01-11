<?php
namespace App\Models;


class Contribution extends AppModels
{
    public function member()
    {
        return $this->belongsTo('App\Models\Member','member_id');
    }
}
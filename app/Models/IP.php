<?php
namespace App\Models;


class IP extends AppModels
{
    public function member()
    {
        return $this->belongsTo('App\Models\Member','member_id');
    }
}
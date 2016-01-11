<?php
namespace App\Models;


class JPRMail extends AppModels
{
    public function JPRMailSends()
    {
        return $this->hasMany('App\Models\JPRMailSend','mail_id');
    }

    public function member()
    {
        return $this->belongsTo('App\Models\Member','from_id');
    }
}
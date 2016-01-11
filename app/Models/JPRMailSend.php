<?php
namespace App\Models;


class JPRMailSend extends AppModels
{
    public function JPRMail()
    {
        return $this->belongsTo('App\Models\JPRMail','mail_id');
    }

    public function member()
    {
        return $this->belongsTo('App\Models\Member','to');
    }
}
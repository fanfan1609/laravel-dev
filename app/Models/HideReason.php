<?php
namespace App\Models;


class HideReason extends AppModels
{
    public function alerts()
    {
        return $this->hasMany('App\Models\Alert','reason');
    }
}
<?php
namespace App\Models;


class SpecialPostReason extends AppModels
{
    public function special_posts()
    {
        return $this->hasMany('App\Models\SpecialPost','reason');
    }

}
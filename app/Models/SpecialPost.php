<?php
namespace App\Models;


class SpecialPost extends AppModels
{
    public function post()
    {
        return $this->belongsTo('App\Models\Post');
    }

    public function reason()
    {
        return $this->belongsTo('App\Models\SpecialPostReason','reason');
    }
}
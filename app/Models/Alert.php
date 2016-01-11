<?php
namespace App\Models;


class Alert extends AppModels
{
    public function hideReason()
    {
        return $this->belongsTo('App\Models\HideReason','reason');
    }

    public function post()
    {
        return $this->belongsTo('App\Models\Post','post_id');
    }
}
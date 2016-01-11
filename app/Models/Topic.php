<?php
namespace App\Models;


class Topic extends AppModels
{
    public function moderators()
    {
        return $this->hasMany('App\Models\Moderator');
    }

    public function subscriptions()
    {
        return $this->hasMany('App\Models\Subscription');
    }

    public function parentTopic()
    {
        return $this->hasOne('App\Models\Topic','parent_topic');
    }

    public function posts()
    {
        return $this->hasMany('App\Models\Posts','topic');
    }
}
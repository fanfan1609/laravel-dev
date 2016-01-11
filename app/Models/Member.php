<?php
namespace App\Models;


class Member extends AppModels
{
    public function bookmarks()
    {
        return $this->hasMany('App\Models\Bookmark');
    }

    public function contributions()
    {
        return $this->hasMany('App\Models\Contribution');
    }

    public function ips()
    {
        return $this->hasMany('App\Models\IP');
    }

    public function jprMails()
    {
        return $this->hasMany('App\Models\JPRMail','from_id');
    }

    public function jprMailSends()
    {
        return $this->hasMany('App\Models\JPRMailSend','to');
    }

    public function juryVotes()
    {
        return $this->hasMany('App\Models\JuryVote');
    }

    public function moderators()
    {
        return $this->hasMany('App\Models\Moderator');
    }

    public function posts()
    {
        return $this->hasMany('App\Models\Post');
    }

    public function recommendations()
    {
        return $this->hasMany('App\Models\Recommendation');
    }

    public function subscriptions()
    {
        return $this->hasMany('App\Models\Subscription');
    }



}
<?php
namespace App\Models;


class Post extends AppModels
{
    public function member()
    {
        return $this->belongsTo('App\Models\Member');
    }

    public function alerts()
    {
        return $this->hasMany('App\Models\Alert');
    }

    public function bookmarks()
    {
        return $this->hasMany('App\Models\Bookmark');
    }

    public function juryVotes()
    {
        return $this->hasMany('App\Models\JuryVote');
    }

    public function postEdits()
    {
        return $this->hasMany('App\Models\PostEdit');
    }

    public function recommendations()
    {
        return $this->hasMany('App\Models\Recommendation');
    }

    public function specialPosts()
    {
        return $this->hasMany('App\Models\SpecialPost');
    }

    public function responsePost()
    {
        return $this->hasOne('App\Models\Post','response_to_post');
    }

    public function topic()
    {
        return $this->belongsTo('App\Models\Topic','topic');
    }
}